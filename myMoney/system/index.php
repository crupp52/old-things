<?php

require 'libs/Smarty.class.php';

$smarty = new Smarty;

function popup($value)
{
	echo "<script>alert('".$value."')</script>";
}

session_start();

//include_once 'analytics.php';

if (isset($_GET["device"])) {
	$_SESSION["device"] = $_GET["device"];
	header('Location: index.php');
}

if ($_SESSION["device"]=="") {
	header('Location: ../index.html');
}

if($_SESSION["user_id"]==""){
	header('Location: login.php');
}

if(isset($_POST["add"])){
	if($_POST["unit"]!=""){
		$uid = $_SESSION["user_id"];
		$unit = $_POST["unit"];
		$route = $_POST["route"];
		$mode = $_POST["mode"];
		$category = $_POST["category"];
		if($category == ""){
			$category = "Bevétel";
		}
		if (isset($_POST["comment"])) {
			$comment = $_POST["comment"];
		}else {
			$comment = "";
		}
		$date = date("Y-m-d");

		if($route=="out"){
			$unit = -1 * abs($unit);
		}

		include "include/connect.php";
		$sql="INSERT INTO transactions (uid, unit, date, route, mode, category, comment) VALUES(".$uid.",".$unit.",'".$date."','".$route."','".$mode."','".$category."','".$comment."')";
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
		header('Location: index.php');
	}
}

$sql = "";
$query_sum = 0;
$query_value = "";
if (isset($_POST["query"])) {
	if ($_POST["query"] != "") {
		$query_value = $_POST["query"];
		$sql = "select * from transactions where uid=" . $_SESSION["user_id"] ." AND ". $_POST["query"] ." order by id desc ";
	}else {
		$sql = "select * from transactions where uid=".$_SESSION["user_id"] . " order by id desc ";
	}
}else{
	$date = "";
	$category = "";
	if (isset($_GET["date"])) {
		$start = "";
		$end = "";
		switch ($_GET["date"]){
			case "week":
				$end = date("Y-m-d");
				$start = date('Y-m-d', strtotime('last Monday'));
				$sql = " AND date BETWEEN '".$start."' AND '".$end."'";
			break;
			case "month":
				$end = date("Y-m-d");
				$start = date('Y-m-d', strtotime('first day of this month'));
			break;
		}
		$date = " AND date BETWEEN '".$start."' AND '".$end."'";
	}
	if (isset($_GET["category"])) {
		if($_GET["category"]=="in" || $_GET["category"]=="out"){
			$category = " AND route='".$_GET["category"]."'";
		}else{
			$category = " AND category='".$_GET["category"]."'";
		}
	}
	$limit = "";
	if ($_SESSION["device"] == "mobile") {
		$limit = "limit 8";
	}
	$sql = "select * from transactions where uid=".$_SESSION["user_id"].$date.$category." order by id desc ".$limit;
}
include "include/connect.php";
$result = mysqli_query($conn, $sql);
//echo $sql;
$last_move = "";
$count=0;
if (mysqli_num_rows($result) > 0) {
	while($content = mysqli_fetch_assoc($result)) {
		if ($_SESSION["device"] == "mobile") {
			$class = $content["route"];
			$last_move.="<tr class='".$class."'>";
			$last_move.="<td class='unit'>".number_format($content["unit"], 0, '', ' ')."</td>";
			$last_move.="<td class='date'>".substr($content["date"],0,10)."</td>";
			if($content["mode"]=="cash"){
				$mode="<img src='img/money.png' style='width:25px;height:27px'>";
			}else{
				$mode = "<img src='img/credit_card.png' style='width:25px;height:27px'>";
			}
			$last_move.="<td class='mode'>".$mode."</td>";
			if ($content["comment"]!="") {
				$last_move.="<td class='category'>".$content["comment"]."</td>";
			}else {
				$last_move.="<td class='category'>".$content["category"]."</td>";
			}
			$last_move.="</tr>";

			$query_sum = $query_sum + abs($content["unit"]);
		}else{
			$class = $content["route"];
			$last_move.="<tr class='".$class."'>";
			$last_move.="<td class='unit'>".number_format($content["unit"], 0, '', ' ')."</td>";
			$last_move.="<td class='date'>".substr($content["date"],0,10)."</td>";
			if($content["mode"]=="cash"){
				$mode="<span>Készpénz </span><img src='img/money.png' style='width:25px;height:27px'>";
			}else{
				$mode = "<span>Bankkártya </span><img src='img/credit_card.png' style='width:25px;height:27px'>";
			}
			$last_move.="<td class='mode'>".$mode."</td>";
			if ($content["comment"]!="") {
				$last_move.="<td class='category' overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;'>".$content["comment"]."</td>";
			}else {
				$last_move.="<td class='category'>".$content["category"]."</td>";
			}
			$last_move.="</tr>";

			$query_sum = $query_sum + abs($content["unit"]);
		}
	}
}
mysqli_close($conn);

include "include/connect.php";
$sql = "SELECT unit,mode FROM transactions WHERE uid=".$_SESSION["user_id"];
$result = mysqli_query($conn, $sql);

$sum=0;
$kp=0;
$credit=0;
if (mysqli_num_rows($result) > 0) {
	while($content = mysqli_fetch_assoc($result)) {
		$sum = $sum + $content["unit"];
		if($content["mode"]=="cash"){
			$kp = $kp + $content["unit"];
		}else{
			$credit = $credit + $content["unit"];
		}
	}
}
mysqli_close($conn);

if ($_SESSION["admin"] == false){
	$display = "display:none;";
}else {
	$display = "";
}
$smarty->assign('display', $display);

if ($query_sum != 0) {
	$smarty->assign('query_sum', number_format($query_sum, 0, '', ' '));
}

$smarty->assign('query_value', $query_value);

$smarty->assign('last_move', $last_move);
$smarty->assign('sum', number_format($sum, 0, '', ' '));
$smarty->assign('kp', number_format($kp, 0, '', ' '));
$smarty->assign('credit', number_format($credit, 0, '', ' '));

if ($_SESSION["admin"]) {
	if ($_SESSION["device"] == "desktop") {
		$smarty->display('index_desktop.tpl');
	}else if ($_SESSION["device"] == "mobile") {
		$smarty->display('index_mobile.tpl');
	}
}else {
	$smarty->display('notservice.tpl');
}

//$smarty->display('index.tpl');
?>
