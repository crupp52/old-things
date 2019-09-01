<?php
session_start();
require 'libs/Smarty.class.php';

$smarty = new Smarty;
$message="Add meg az új jelszavad";

if(isset($_POST["add"])){
	if( $_POST["new_pass"]!="" && $_POST["renew_pass"]!="" && $_POST["new_pass"] == $_POST["renew_pass"]){
    $pass = password_hash($_POST["new_pass"], PASSWORD_DEFAULT);

    include "include/connect.php";
    $sql = "UPDATE transaction_user SET pass ='".$pass."' where uid='".$_SESSION["user_id"]."'";
    if (mysqli_query($conn, $sql)) {
      header('Location: index.php');
    }
    mysqli_close($conn);
	}else{
    $message = "A két jelszó nem azonos";
  }
}

$smarty->assign('message', $message);
$smarty->display('new_pass.tpl');
?>
