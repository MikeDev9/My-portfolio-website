<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$project= $_POST['project'];
$message= $_POST['message'];
$to = "devosec21@gmail.com";
$subject = "Mail From mikedev9";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Project = " . $project . "\r\n Message =" . $message.;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>