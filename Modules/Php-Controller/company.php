<?php

include 'dbh.php';

$license = $_POST['license'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$password = $_POST['password'];
$retype = $_POST['retype-password'];
if($password == $retype )
{
//echo $license;
//echo $company;
$sql = "INSERT INTO company_login (license,company,email,phone,location,password) 
VALUES ('$license','$company','$email','$phone','$location','$password')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{

	header("Location: reg.html");
	echo "Enter correct password";
}


$conn->close();
?>