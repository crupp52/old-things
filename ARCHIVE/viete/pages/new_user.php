<div id="post">
	<form action="?p=new_user" method="post">
		<table style="width:100%">
			<tr>
				<td style="width:70px;font-weight: bold;">
					Felhasználónév
				</td>
				<td>
					<input class="new_post" type="text" name="user_name">
				</td>
			</tr>						<!--<tr>				<td style="width:70px;font-weight: bold;">					Jelszó				</td>				<td>					<input class="new_post" type="password" name="password">				</td>			</tr>-->
			<tr>
				<td style="vertical-align:top;font-weight: bold;">
					Vezetéknév
				</td>
				<td>
					<input class="new_post" type="text" name="last_name">
				</td>
			</tr>
			<tr>
				<td style="vertical-align:top;font-weight: bold;">
					Keresztnév
				</td>
				<td>
					<input class="new_post" type="text" name="first_name">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input class="new_sub" style="float:right" type="submit" name="submit" value="Küld">
				</td>
			</tr>
		</table>
	</form>
</div>

<?php
$ok=0;
if (!isset($_POST["submit"])) {
  //echo "Nincs submit";
}else {
	//bevitt adatok tárolása
	$user_name = $_POST["user_name"];	//$password = $_POST["password"];
	$last_name = $_POST["last_name"];
	$first_name = $_POST["first_name"];
	$datum = date("Y-m-d");	
	//többi adat ellenőrzése
	if ($user_name==null) {
	  echo "Nem adtad meg a felhasználóneved! ";
	}else {
	  $ok++;
	}		/*if ($password==null) {	  echo "Nem adtad meg a felhasználóneved! ";	}else {		if(strlen($password) > 6){			$ok++;		}else{			echo "Kevesebb mint hat karakter a jelszavad! ";		}	  	}*/
	if ($last_name==null) {
	  echo "Nem adtál meg a vezetékneved! ";
	}else {
	  $ok++;
	}
	if ($first_name==null) {
	  echo "Nem adtad meg a keresztneved! ";
	}else {
	  $ok++;
	}
	if ($ok==3) {
		include 'connect.php';		/*
		$sql = "INSERT INTO users (user_name, password, last_name, first_name, reg_date)
		VALUES ('$user_name','$password','$last_name','$first_name','$datum')";		*/				$sql = "INSERT INTO users (user_name, last_name, first_name, reg_date)		VALUES ('$user_name','$last_name','$first_name','$datum')";
		if (mysqli_query($conn, $sql)) {
			echo "Sikeresen létrehoztad a felhasználóneved!";
		} else {
			echo "Van már ilyen felhasználónév. Kérlek válassz másikat!";
		}
		mysqli_close($conn);
	}}
?>