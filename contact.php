<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
//    $mail->SMTPDebug = 1;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'iotec.me@gmail.com';
    $mail->Password   = 'Abc123!@#';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('iotec.me@gmail.com', 'IOTec Team');
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    $mail->isHTML(true);
    $mail->Subject = 'Get In Toutch with us ?';
    include('message.php');
    $mail->Body    = $html;

    $mail->send();

    echo json_encode(array("success"=> true));

} catch (Exception $e) {
    echo json_encode(array("success"=> false));
}