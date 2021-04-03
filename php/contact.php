<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'D:/php/PHPMailer/src/Exception.php';
require 'D:/php/PHPMailer/src/PHPMailer.php';
require 'D:/php/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

if($_POST["submit"]) {
    $recipient="stephanieosaje@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent!</p>";
}
