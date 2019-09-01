<?php

//include "connect.php";


$sql = "SELECT cim, tartalom, szerzo, datum FROM post ORDER BY post.id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($content = mysqli_fetch_assoc($result)) {
        echo "<div id='post'><h1>" . $content["cim"] . "</h1><p>" . $content["tartalom"] . "</p><br><p style='font-size: 12px; color:gray;'>-" . $content["szerzo"] . " " . $content["datum"] . "</p></div>";
    }
} else {
    echo "Nincs itt semmi érdekes!";
}


?>
