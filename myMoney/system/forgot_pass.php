<?php
session_start();
require 'libs/Smarty.class.php';

$smarty = new Smarty;
$message="Add meg a felhasználóneved!";
$show = '<form action="forgot_pass.php" method="post">
            <table style="margin-top:25px">
              <tr>
                <td align="center"><img style="width:50%;margin-bottom:30px" src="img/login_cover.png"></td>
              </tr>
              <tr>
                <td style="color:#007bff">'.$message.'</td>
              </tr>
              <tr>
                <td style="width:380px"><input class="form-control" type="type" name="user" autocomplete="off" autocapitalize="off" placeholder="Felhasználónév"></td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" style="margin-top:25px;width:380px;font-size:20px;" type="submit" name="reset" value="Jelszó visszaállítása">
                </td>
              </tr>
            </table>
          </form>';

if(isset($_POST["reset"])){
  if(isset($_POST["user"])){
    include "include/connect.php";
    $sql = "select * from transaction_user where user='".$_POST["user"]."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($content = mysqli_fetch_assoc($result)) {
    		$email = $content["email"];
    	}

      $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
      $new_pass = "";
      for ($i = 0; $i < 10; $i++) {
        $new_pass .= $characters[rand(0, strlen($characters) - 1)];
      }
      $txt = (string)$new_pass;
      $new_pass_hash = password_hash((string)$new_pass, PASSWORD_DEFAULT);

      $to = $email;
      $subject = "Jelszó visszaállítás";
      $txt = "Az új jelszavad: ".$txt."\n\nÜdvözlettel, myMoney fejlesztője";
      $headers = "From: support@mymoney.com";
      mail($to,$subject,$txt,$headers);

      /*$to = $email;
      $subject = "Jelszó visszaállítás";
      $txt = $new_pass;
      $headers = "From: myMoney";*/


      $sql = "UPDATE transaction_user SET pass ='".$new_pass_hash."' where user='".$_POST["user"]."'";
      $result = mysqli_query($conn, $sql);

      $message = "Sikeres jelszó visszaállítás";
      $show = '<form action="forgot_pass.php" method="post">
                  <table style="margin-top:25px">
                    <tr>
                      <td align="center"><img style="width:50%;margin-bottom:30px" src="img/login_cover.png"></td>
                    </tr>
                    <tr>
                      <td style="color:#007bff; text-align: center;">'.$message.'</td>
                    </tr>
                    <tr>
                      <td>
                        <button class="btn btn-primary" style="margin-top:25px;width:380px;font-size:20px;"><a style="color:white;text-decoration:none;cursor:default" href="login.php">Vissza</a></button>
                      </td>
                    </tr>
                  </table>
                </form>';
    }else{
      $message = "Nincs ilyen felhasználó.";
    }
  }
}

$smarty->assign('show', $show);
$smarty->assign('message', $message);
$smarty->display('forgot_pass.tpl');
?>
