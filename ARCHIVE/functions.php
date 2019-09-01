<?php
//itt van minden funkció
//készítette: Zuck Levente
//last update: 270617

function connect() {
	include 'connect.php';
}

function disconnect() {
	mysqli_close($conn);
}

?>
