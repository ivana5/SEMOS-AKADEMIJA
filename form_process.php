<?php 

$to = "kursevi@semos.com.mk";
$subject = "New Message";

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POS["phone"];
$message = $_POST["message"];


if(@mail($to, $subject, $message, $email))
{
  echo "Mail Sent Successfully";
}else{
  echo "Mail Not Sent";
}

?>