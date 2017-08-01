<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$ul="http://www.passwordrandom.com/query?command=password&format=json";
$info= json_decode(file_get_contents($ul), true);
$random="";
foreach($info['char'] as $item) {
    $random=$item;
}

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dhilip94@gmail.com';                 // SMTP username
$mail->Password = 'Dhilipkum@r_123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('no-reply@ayush.com', 'ayush');
$mail->addAddress('swarna.ilas97@gmail.com', 'swarna');     // Add a recipient
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Forgot Password';
$mail->Body    = "As a forgot password request has been made from your AYUSH account we  have generated a random password.You can use this password to sign in to your account.Password<b>$random</b><br>If you haven't made this request,Kindly ignore";
$mail->AltBody = 'forgot password';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}