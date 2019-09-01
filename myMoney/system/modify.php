<?php
require 'libs/Smarty.class.php';

$smarty = new Smarty;

session_start();
if($_SESSION["user_id"]==""){
	header('Location: login.php');
}

$sql = "select * from transactions where uid=".$_SESSION["user_id"]." order by id desc";

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
		$last_move.="<td class='mode'><a href='modify.php?delete=".$content["id"]."' onclick='return checkBeforeDelete()'><img src='img/x.png'></a></td>";
		$last_move.="</tr>";

		$sum = $sum + abs($content["unit"]);
	}
}
mysqli_close($conn);

if(isset($_GET["delete"])){
	$id=$_GET["delete"];

	$sql = "DELETE FROM transactions WHERE id=".$id;
	include "include/connect.php";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header('Location: modify.php');
}

$smarty->assign('last_move', $last_move);
$smarty->assign('sum', number_format($sum, 0, '', ' '));

$smarty->display('modify.tpl');
?>
