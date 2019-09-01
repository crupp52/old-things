<?php
require 'libs/Smarty.class.php';

$smarty = new Smarty;

session_start();

if($_SESSION["user_id"]==""){
	header('Location: login.php');
}

$start = "";
$end = "";
$list = "";
$sum = 0;
$other = "";

if (isset($_POST["reset"])) {
	header('Location: statistics.php');
}

if (isset($_POST["start"]) || isset($_POST["end"])) {
	if ($_POST["start"] == "") {
		$start = "1970-01-01";
	}else {
		$start = $_POST["start"];
	}
	if ($_POST["end"] == "") {
		$end = date('Y-m-d');
	}else {
		$end = $_POST["end"];
	}

	if (isset($_POST["other"])) {
		if ($_POST["other"] != "") {
			$other = "AND ".$_POST["other"];
		}
	}

	$sql = "SELECT * FROM transactions WHERE uid='".$_SESSION["user_id"]."' AND date BETWEEN '".$start."' and '".$end."'".$other." order by id desc ";
	include "include/connect.php";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($content = mysqli_fetch_assoc($result)) {
			$list.="<tr>";
			$list.="<td>".$content["unit"]."</td>";
			$list.="<td>".$content["date"]."</td>";
			$list.="<td>".$content["route"]."</td>";
			$list.="<td>".$content["category"]."</td>";
			$list.="</tr>";

			$sum = $sum + abs($content["unit"]);
		}
	}
	mysqli_close($conn);
}

if ($other != "") {
	$other = substr($other, 4);
}

$smarty->assign('list', $list);
$smarty->assign('sum', $sum);
$smarty->assign('start', $start);
$smarty->assign('end', $end);
$smarty->assign('other', $other);

$smarty->display('statistics.tpl');
 ?>
