<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Send mail</title>-->
<!--</head>-->
<!--<body>-->
<!--<form action="sendmail.php" method="post"> < Specify the action attribute and method -->-->
<!--    <input type="submit" name="send">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

<?php

use master\src\Exception;
use master\src\PHPMailer;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8';
$mail->SMTPDebug = 1;
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; // You can also use 'tls' for port 587
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465; // or 587
$mail->isHTML(true);
$mail->Username = 'bichbeo2003@gmail.com'; // Replace with your Gmail address
$mail->Password = 'ncze aonc zncf iegf'; // Replace with your Gmail password
$mail->setFrom('bichbeo2003@gmail.com', 'Bich ngoc'); // Replace with your name and Gmail address
$mail->Subject = 'ĐIểm danh 63HTTT1';
$mail->Body = 'Điểm danh ';
$mail->addAddress('dungkt@wru.vn'); // Replace with the recipient's email address

try {
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
