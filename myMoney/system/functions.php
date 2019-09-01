<?php

function Query($sql)
{
  include "include/connect.php";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($content = mysqli_fetch_assoc($result)) {
      
    }
  }

  mysqli_close($conn);
}

?>
