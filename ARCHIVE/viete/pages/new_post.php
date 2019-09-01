<div id="post">
  <form action="?p=new_post" method="post">
    <table style="width:100%">
      <tr>
        <td style="width:70px;font-weight: bold;">Cím</td>
        <td><input class="new_post" type="text" name="cim"></td>
      </tr>
	  <tr>
        <td style="vertical-align:top;font-weight: bold;">Készítő</td>
        <td><input class="new_post" type="text" name="szerzo"></td>
      </tr>
	  <!--<tr>
        <td style="vertical-align:top;font-weight: bold;">Jelszó</td>
        <td><input class="new_post" type="password" name="password"></td>
      </tr>-->
      <tr>
        <td style="vertical-align:top;font-weight: bold;">Tartalom</td>
        <td><textarea class="new_post" name="szoveg" cols="num" rows="num"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input class="new_sub" style="float:right" type="submit" name="submit" value="Küld">
        </td>
      </tr>
    </table>
  </form>
  <a style="font-size: 14px;color:gray;text-decoration: none;" href="?p=new_user">Ha még nincs felhasználóneved akkor itt készíthetsz egyet.</a>
</div>

<?php
$ok=0;
if (!isset($_POST["submit"])) {
  //echo "Nincs submit";
}else {
	//bevitt adatok tárolása
	$cim = $_POST["cim"];
	$tartalom = $_POST["szoveg"];
	$szerzo = $_POST["szerzo"];
	$password = $_POST["password"];
	$datum = date("Y-m-d");
	
	//többi adat ellenőrzése
	if ($cim==null) {
	  echo "Nem adtál meg címet! ";
	}else {
	  $ok++;
	}

	if ($tartalom==null) {
	  echo "Nem adtál meg tartalmat!";
	}else {
	  $ok++;
	}

	if ($szerzo==null) {
		echo "Nem adtad meg a felhasználó neved! ";
	}else {
		include "connect.php";
		$sql = "SELECT user_name FROM users WHERE user_name = '$szerzo'";
		$result = mysqli_query($conn, $sql);
		$temp = mysqli_fetch_assoc($result);
		if($temp["user_name"] == $szerzo){
			$ok++;
		}else{
			echo "Nincs ilyen felhasználónév! ";
		}
		mysqli_close($conn);
	}
	
	/*if($password==null){
		echo "Nem adtad meg a jelszavad! ";
	}else{
		include "connect.php";
		
		$sql = "SELECT users.password FROM users WHERE users.user_name = '$szerzo'";
		$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
		echo $result;
		if($result["password"] == $password){
			$ok++;
		}
		
		mysqli_close($conn);
	}*/

	if ($ok==3) {
	  include 'connect.php';

	  $sql = "INSERT INTO post (cim, tartalom, szerzo, datum)
	  VALUES ('$cim','$tartalom','$szerzo','$datum')";

	  if (mysqli_query($conn, $sql)) {
		 echo "Sikeres post";
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }

	  mysqli_close($conn);
	}
}
?>
