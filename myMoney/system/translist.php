<?php
require 'libs/Smarty.class.php';


$smarty = new Smarty;

session_start();
if($_SESSION["user_id"]==""){
	header('Location: login.php');
}

$date=$_GET["date"];

$sql = "";

switch ($date){
	case "week":
		$end = date("Y-m-d");
		$start = date('Y-m-d', strtotime('last Monday'));
		$sql = "select * from transactions where date BETWEEN '".$start."' AND '".$end."' AND uid=".$_SESSION["user_id"];
	break;
	case "month":
		$end = date("Y-m-d");
		$start = date('Y-m-d', strtotime('first day of this month'));
		$sql = "select * from transactions where date BETWEEN '".$start."' AND '".$end."' AND uid=".$_SESSION["user_id"];
	break;
	default:
		header ("Location: index.php");
	break;
}

$feltet="";
if(isset($_GET["category"])){
	if($_GET["category"]=="in" || $_GET["category"]=="out"){
		$feltet = " AND route='".$_GET["category"]."' ";
	}else{
		$feltet = " AND category='".$_GET["category"]."' ";
	}
}

$sql.=$feltet." order by id desc";

include "include/connect.php";
$result = mysqli_query($conn, $sql);
$last_move = "";
$count=0;
$sum=0;
if (mysqli_num_rows($result) > 0) {
	while($content = mysqli_fetch_assoc($result)) {
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
		$last_move.="<td class='category'>".$content["category"]."</td>";
		$last_move.="</tr>";

		$sum = $sum + abs($content["unit"]);
	}
}
mysqli_close($conn);
$smarty->assign('last_move', $last_move);
$smarty->assign('sum', number_format($sum, 0, '', ' '));

$smarty->display('translist.tpl');
?>
