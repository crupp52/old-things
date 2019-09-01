<?php
  //éles
  $servername = "mysql.hostinger.hu";
  $username = "u462798691_money";
  $password = "levente11";
  $dbname = "u462798691_money";

  //teszt
  /*$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "transaction";*/

  $conn = mysqli_connect($servername, $username,$password,$dbname);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
?>
