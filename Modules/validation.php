<?php
function validate($user,$password)
{

include 'dbh.php';
$result = mysqli_query($conn, "SELECT * FROM users WHERE user_name = '" . $user. "' and user_password = '" . $password. "'");
if ($row = mysqli_fetch_array($result)) 
{
	echo "valid login";

 }else

echo "Incorrect License Number or Password";


$conn->close();
}
?>
