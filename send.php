<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$comment=$_POST['comment'];

$to = "freezecorp17@gmail.com";
$subject = "Freeze corp";
$body = "This is an automated message. Please don't reply to this email /n/n $_request";


mail($to,$subject,$body);

echo"message send <a href="index.html">click here </a>to send another email";
?>