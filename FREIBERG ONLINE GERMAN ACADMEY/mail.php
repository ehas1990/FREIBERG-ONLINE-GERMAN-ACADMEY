<?php
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$sub= $_POST['sub'];
$message= $_POST['message'];
$subject="freiberggermanyacademy";
$to = "ehasalpha@gmail.com";  
// $to = "info@freiberggermanyacademy.com";
$txt ="Name : ". $name . "\r\n phone : " . $phone . "\r\n  Message :" . $message;
$sub= ". $sub";
$headers = "From:" . $email;
 
if(mail($to,$sub,$txt,$headers)) {
 
echo "<h1>Sent Successfully! Thank you ".$name.", We will contact you shortly!</h1>";
} else {
    echo "The email message was not sent.";
}

?>