<?php

$to = "zuck.levi@gmail.com";
$subject = "teszt v2";
$txt = "Na mostmár írok is ide valamit. Talán az ékezetek tesztelésére jó. őúáűöüííí";
$headers = "From: Anyád" . "\r\n" . "CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

 ?>
