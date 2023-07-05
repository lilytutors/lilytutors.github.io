<?php
$to = "lilylassiter11@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: academicshda@gmail.com" . "\r\n" .
"CC: laslil7437@gmail.com";

mail($to,$subject,$txt,$headers);
?>