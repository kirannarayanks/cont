<?php
$name = $_POST['name'];
$user_email = $_POST['email'];
$message = $_POST['message'];
$subject = "response from my website"
$headers = "From: kirannarayanks@ba.com";
$to = "kirannrayanks@gmail.com";
mail($to,$subject,$message,$headers)

?>