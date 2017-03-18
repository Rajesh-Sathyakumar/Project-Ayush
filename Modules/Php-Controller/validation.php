<?php

include 'dbh.php';

$license = $_POST['license'];
$password = $_POST['password'];


$sql = "SELECT * FROM company_login WHERE license='$license' AND password='$password'";
$result = $conn->query($sql);
if(!$row=$result->fetch_assoc())
{
	echo "Incorrect License Number or Password";
}
else
{
	header("Location: company.html");
}



$conn->close();
?>