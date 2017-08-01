<html>
<head>Forgot Password</head>
<title>Forgot Password</title>
<body>
<form action="<?php echo$_SERVER['PHP_SELF']; ?>" method="post">
    <div class="align-center">
        <input type="email" name="user_email" class="form-control" placeholder="Enter your EmailID" required="" />
    </div>
    <div class="align-center">
        <input class="btn btn-default submit" id="btn-login" type="submit" name="submit" value="Submit">
    </div>
</form>
</body>
</html>

<?php
require 'phpmailer/PHPMailerAutoload.php';
include '../dbh.php';
$mail = new PHPMailer;
if(isset($_POST["submit"])) {
    $email = $_POST['user_email'];

    $ul = "http://www.passwordrandom.com/query?command=password&format=json";
    $info = json_decode(file_get_contents($ul), true);
    $random = "";
    foreach ($info['char'] as $item) {
        $random = $item;
    }
    $rand=md5($random);
    if (!$re = mysqli_query($conn, "UPDATE users SET Password='$rand' WHERE Email='$email'")) {
        exit(mysqli_error($conn));
    }
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'swarna.ilas@gmail.com';                 // SMTP username
    $mail->Password = 'subhailamathy';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('no-reply@ayush.com', 'ayush');
    $mail->addAddress($email, "user");     // Add a recipient
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Forgot Password';
    $mail->Body = "As a forgot password request has been made from your AYUSH account we  have generated a random password.You can use this password to sign in to your account.Password <b>$random</b><br>If you haven't made this request,Kindly ignore";
    $mail->AltBody = 'forgot password';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
?>