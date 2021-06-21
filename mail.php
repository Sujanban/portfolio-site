<?php
//get data from form  

$name = $_POST['your-name'];
$email= $_POST['email'];
$subjectof= $_POST['subjectof'];
$message= $_POST['message'];
$to = "bansujanemail@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message "\r\\n Subject = " . $subjectof;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>