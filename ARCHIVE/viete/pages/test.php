<?php

	include 'connect.php';

	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);

	$name = "zuckl";
	$van = "no";

	while($content = mysqli_fetch_assoc($result)) {
		if($content["user_name"] == $name){
			$van = "yes";
		}
	}

	if($van = "yes"){
		echo "Rendben van minden";
	}else{
		echo "Ilyen felhasználó nincs! Hozz létre egyet.";
	}

	mysqli_close($conn);

	$sql = null;
	$conn = null;

?>