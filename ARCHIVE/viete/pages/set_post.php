<?php

$cim = 'alma';
$szoveg = 'korte';

   try {
   include '../connect.php';
       $sql = "INSERT INTO post (cim, szoveg)
       VALUES ('$cim', '$szoveg')";
       // use exec() because no results are returned
       $conn->exec($sql);
       echo "New record created successfully";
     }
     catch(PDOException $e)
     {
       echo $sql . "<br>" . $e->getMessage();
     }

    $conn = null;
?>
