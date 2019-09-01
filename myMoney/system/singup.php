<?php
session_start();
require 'libs/Smarty.class.php';

$smarty = new Smarty;
$message="";

if(isset($_POST["singup"])){
	if($_POST["user"]!="" && $_POST["pass"]!=""){
		$user = $_POST["user"];
    $pass = $_POST["pass"];
		$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $repass = $_POST["repass"];
		$email = $_POST["email"];

		if ($pass == $repass) {
			include "include/connect.php";
	    $sql = "SELECT user FROM transaction_user WHERE user='".$user."'";
	    $result = mysqli_query($conn, $sql);
	    if (mysqli_num_rows($result) == 0) {
				$sql = "INSERT INTO transaction_user(user, email, pass, reg_date) VALUES ('".$user."','".$email."','".$pass_hash."','".date("Y-m-d H:i:s", strtotime('+2 hour'))."')";
	      if (mysqli_query($conn, $sql)) {
	        header('Location: login.php');
	      } else {
	        $message = "Már van ilyen felhasználónév";
	      }
	    }
	    mysqli_close($conn);
		}else{
			$message = "A két jelszó nem azonos";
		}
	}else{
    $message = "Nem töltötted ki valamelyik mezőt!";
  }
}else{
	$message="Töltsd ki az alábbi mezőket";
}

$smarty->assign('message', $message);
$smarty->display('singup.tpl');
?>
