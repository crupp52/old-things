<?php

include "connect.php";
if (isset($_GET["u"])) { //FELHASZNÁLÓRA SZŰRÉS
  $sql = "SELECT post.cim, post.tartalom, post.szerzo, post.datum FROM post WHERE post.szerzo like '".$_GET["u"]."' ORDER BY post.id DESC";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($content = mysqli_fetch_assoc($result)) {
      echo "<div id='post'><h1><a style='text-decoration: none;color:black' href='?t=".$content["cim"]."'>" . $content["cim"] . "</a></h1><p>" . $content["tartalom"] . "</p><br><a style='font-size: 12px; color:gray;' href=?u=".$content["szerzo"].">-" . $content["szerzo"] . "</a> <a style='font-size: 12px; color:gray;' href=?d=".$content["datum"].">-" . $content["datum"] . "</a></div>";
    }
  } else {
    echo "Ez a felhasználó még nem írt postot.";
  }
}elseif (isset($_GET["d"])) { //DÁTUMRA SZŰRÉS
  $sql = "SELECT post.cim, post.tartalom, post.szerzo, post.datum FROM post WHERE post.datum like '".$_GET["d"]."' ORDER BY post.id DESC";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($content = mysqli_fetch_assoc($result)) {
      echo "<div id='post'><h1><a style='text-decoration: none;color:black' href='?t=".$content["cim"]."'>" . $content["cim"] . "</a></h1><p>" . $content["tartalom"] . "</p><br><a style='font-size: 12px; color:gray;' href=?u=".$content["szerzo"].">-" . $content["szerzo"] . "</a> <a style='font-size: 12px; color:gray;' href=?d=".$content["datum"].">-" . $content["datum"] . "</a></div>";
    }
  } else {
    echo "A kiválasztott időpontban nem készült post.";
  }
}
elseif (isset($_GET["t"])) { //CÍMRE SZŰRÉS
  $sql = "SELECT post.cim, post.tartalom, post.szerzo, post.datum FROM post WHERE post.cim like '".$_GET["t"]."' ORDER BY post.id DESC";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($content = mysqli_fetch_assoc($result)) {
      echo "<div id='post'><h1><a style='text-decoration: none;color:black' href='?t=".$content["cim"]."'>" . $content["cim"] . "</a></h1><p>" . $content["tartalom"] . "</p><br><a style='font-size: 12px; color:gray;' href=?u=".$content["szerzo"].">-" . $content["szerzo"] . "</a> <a style='font-size: 12px; color:gray;' href=?d=".$content["datum"].">-" . $content["datum"] . "</a></div>";
    }
  } else {
    echo "Nincs ilyen cím.";
  }
}else{  //ÖSSZES POST KILISTÁZÁSA
  $sql = "SELECT post.cim, post.tartalom, post.szerzo, post.datum FROM post ORDER BY post.id DESC";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($content = mysqli_fetch_assoc($result)) {
      echo "<div id='post'><h1><a style='text-decoration: none;color:black' href='?t=".$content["cim"]."'>" . $content["cim"] . "</a></h1><p>" . $content["tartalom"] . "</p><br><a style='font-size: 12px; color:gray;' href=?u=".$content["szerzo"].">-" . $content["szerzo"] . "</a> <a style='font-size: 12px; color:gray;' href=?d=".$content["datum"].">-" . $content["datum"] . "</a></div>";
      }
  } else {
      echo "Nincs itt semmi érdekes!";
  }
}

/*$user = $_GET['u'];

echo $user;

$sql = "SELECT post.cim, post.tartalom, post.szerzo, post.datum FROM post WHERE post.szerzo = 'zuckl' ORDER BY post.id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($content = mysqli_fetch_assoc($result)) {
    echo "<div id='post'><h1>" . $content["cim"] . "</h1><p>" . $content["tartalom"] . "</p><br><p style='font-size: 12px; color:gray;'><a href=?u=".$content["szerzo"].">-" . $content["szerzo"] . "</a> " . $content["datum"] . "</p></div>";
  }
} else {
  echo "Ez a felhasználó még nem írt postot.";
}*/

mysqli_close($conn);
?>
