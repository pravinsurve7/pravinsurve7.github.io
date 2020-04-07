<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "pravinnv7@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
header("Location: index.html");
// echo "Thank You!" . " -" . "<a href='#' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
echo "Thank You!";
?>
