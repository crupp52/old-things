<?php

require 'libs/Smarty.class.php';

$smarty = new Smarty;

function popup($value)
{
	echo "<script>alert('".$value."')</script>";
}

session_start();
if($_SESSION["user_id"]==""){
	header('Location: login.php');
}

$message = "";
$user_table = "";

include "include/connect.php";
$sql = "select * from transaction_user where uid='".$_SESSION["user_id"]."' and admin=1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
	$message = "Nincs jogosultságod az oldal megnyitásáshoz!";
}else{
	$sql = "SELECT * FROM transaction_user order by uid desc";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$user_table = "";

		while($content = mysqli_fetch_assoc($result)) {
			$user_table.= "<tr>";
			$user_table.= "<td style='border: 1px solid black;text-align:center'>".$content["uid"]."</td>";
			$user_table.= "<td style='border: 1px solid black;text-align:center'>".$content["user"]."</td>";
			$user_table.= "<td style='border: 1px solid black;text-align:center'>".$content["last_login"]."</td>";
			$user_table.= "<td style='border: 1px solid black;text-align:center'>".$content["reg_date"]."</td>";
			$user_table.= "</tr>";
		}
	}
}
mysqli_close($conn);

$smarty->assign('message', $message);
$smarty->assign('user_table', $user_table);
$smarty->display('admin.tpl');
?>
