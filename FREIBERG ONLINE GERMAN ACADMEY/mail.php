<?php
//get data from form  

$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$sub= $_POST['sub'];
$message= $_POST['message'];
$to = "ehasalpha@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n  phone = " . $phone . "\r\n sub = " . $sub ."\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>