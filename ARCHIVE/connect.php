<?php
//éles környezet
  $servername = "mysql.hostinger.hu";
  $username = "u462798691_lev";
  $password = "levente11";
  $dbname = "u462798691_dev";
  
 //teszt környezet
  /*$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "_devproj";*/

  $conn = mysqli_connect($servername, $username,$password,$dbname);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
?>
