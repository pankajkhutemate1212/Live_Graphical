<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication

/*$mail->Username = 'infinitiinfosystems@gmail.com';                 // SMTP username
$mail->Password = 'buyer345';                           // SMTP password*/

$mail->Username = 'external66projects@gmail.com';                 // SMTP username
$mail->Password = 'b4_h964218Us&h$an';                           // SMTP password

$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('external66projects@gmail.com', 'Mailer');
$mail->addAddress('bhushan66chavan@gmail.com', 'Joe User');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject 3';
$mail->Body    = 'This is the HTML message body <b>in bold!</b> 3';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>