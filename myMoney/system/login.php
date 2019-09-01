<?php
session_start();
require 'libs/Smarty.class.php';

$smarty = new Smarty;
$message="Jelentkezz be, mielőtt bármit tennél!";

if(isset($_POST["add"])){
	if($_POST["user"]!="" && $_POST["pass"]!=""){
		$user = $_POST["user"];
    $pass = $_POST["pass"];

    include "include/connect.php";
    $sql = "select * from transaction_user";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    	while($content = mysqli_fetch_assoc($result)) {
    		if($content["user"]==$user && password_verify($pass, $content["pass"])) {
    			$_SESSION["user_id"] = $content["uid"];
					if ($content["admin"] == 1) {
						$_SESSION["admin"] = true;
					}else {
						$_SESSION["admin"] = false;
					}
					$sql = "UPDATE transaction_user SET last_login = '".date("Y-m-d H:i:s", strtotime('+2 hour'))."' WHERE uid = ".$content["uid"].";";
			    $result = mysqli_query($conn, $sql);
          header('Location: index.php');
    		} else {
    			$message = "Rossz felhasználónév vagy jelszó";
    		}
    	}
    }
    mysqli_close($conn);
	}else{
    $message = "Nem adtad meg a felhasználóneved vagy a jelszavad";
  }
}

$smarty->assign('message', $message);
$smarty->display('login.tpl');
?>
