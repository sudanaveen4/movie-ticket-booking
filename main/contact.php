<?php
$name = $_POST['name'];
$email =$_POST['email'];
$number =$_POST['number'];
$message =$_POST['message'];
$to = "sudanaveen386@email.com";
$subject = "Mail From sql project website";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n number=" . $number . "\r\n Message =" . $message;
$headers = "From: noreply@sqlwebsite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
} 
header("admin.html");
?>