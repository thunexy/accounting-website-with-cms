<?php

include "framework/otherClasses.php";
$r = $_POST;
$phone = $r["phone"];
$name = $r["name"];
$email = $r["email"];
$message = $r["message"];
SendEmail::sendMail("info@spearmansuk.com", "NEW MESSAGE FROM $name - $phone", "$message", "$email");
echo "<script>alert('Your message has been sent successfully!'); window.location.href='contact.php';</script>";