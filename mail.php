<?php

 if (isset($_POST['submit'])) {
$placeholder = $_POST[ 'name'];
$placeholder = $_POST['email'];
$placeholder = $_POST['project'];
$placeholder = $_POST['message'];

$emailTo = "devosec21@gmail.com";
$headers = "From: ".$placeholder;
&txt = " got email from" .$name.".\n\n".$message;


$emailTo($placeholder, $placeholder, $placeholder, $placeholder);
header("Location: index.php?emailsend")


 }