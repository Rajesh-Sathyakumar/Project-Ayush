<?php
function register($user,$password,$company,$company_email,$email,$license_number,$license_validity,$pincode)
{
    include 'dbh.php';
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $flag=0;
    $conn =mysqli_connect("localhost","root","","ayush");
    $license_validity1= date("Y-m-d", strtotime($license_validity));
    if (!$result = mysqli_query($conn,"INSERT INTO companylicenses(LicenseNumber,ValidityDate) values('$license_number','$license_validity1')")) {
        exit(mysqli_error($conn));
    }
    else{
        $flag=1;
    }
    $res= mysqli_query($conn,"Select CompanyLicenseKey from companylicenses where LicenseNumber='$license_number'");
    $license= mysqli_fetch_array($res);
    foreach($license as $it){
        $license_key=$it;
    }
    $ul = "https://data.gov.in/api/datastore/resource.json?resource_id=6176ee09-3d56-4a3b-8115-21841576b2f6&api-key=90daa0c49dc352c43d228cf5ba16ad07&filters[pincode]=" . urlencode($pincode);
    $ul .= "&limit=1&fields=Districtname,statename";
    $info= json_decode(file_get_contents($ul), true);
    foreach($info['records'] as $item) {
        $city=$item['Districtname'];
        $state=$item['statename'];
    }
    $state=strtolower($state);
    if (!$re = mysqli_query($conn,"INSERT INTO company_details(CompanyName,EmailAddress,City,State,Pincode,LicenseKey) values('$company','$company_email','$city','$state','$pincode','$license_key')")) {
        exit(mysqli_error($conn));
    }
    else{
        $flag=1;
    }
    $com= mysqli_query($conn,"Select CompanyKey from company_details where LicenseKey='$license_key'");
    $key= mysqli_fetch_array($com);
    foreach($key as $item){
        $company_key=$item;
    }
    $role="superadmin";
    $status="inactive";
    $random_key=rand(10,10000);
    if (!$comp = mysqli_query($conn,"INSERT INTO users(UserName,Password,Role,CompanyId,Email,RandomKey,Status) values('$user','$password','$role','$company_key','$email','$random_key','$status')")) {
        exit(mysqli_error($conn));
    }
    else{
        $flag=1;
    }
    if($flag==1){

        $url="http://localhost/final/Modules/verify.php?random=". urlencode($random_key);

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'swarna.ilas@gmail.com';                 // SMTP username
        $mail->Password = 'subhailamathy';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('swarna.ilas@gmail.com', 'Mailer');
        $mail->addAddress($email,$user);     // Add a recipient
      //  $mail->addAddress('ellen@example.com');                      // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
       // $mail->addCC('cc@example.com');
       // $mail->addBCC('bcc@example.com');

      $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Registration successful';
        $mail->Body    = "The user registration of your company $company is successful with username $user<br><p>click in the below link to activate your account<br>$url</p><b></b>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            header('Location: '."login.php");
        }
    }
}
?>