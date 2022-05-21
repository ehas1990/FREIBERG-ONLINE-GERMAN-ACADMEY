<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
        $sub=$_POST['sub'];

		$to='ehasahamed@mail.com'; 
		$subject='Freiberg Online German Academy & Educational Consultancy';
		$txt ="Name : ". $name . "\r\n phone : ". $phone . "\r\n Email : " . $email ."\r\n sub : ". $sub . "\r\n Message :" . $message;
           $headers = "From: $email" . "\r\n" .
        "CC: somebodyelse@example.com";
     if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
	}
?>