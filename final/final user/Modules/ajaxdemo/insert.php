
<?php
$dbname = "ex" ;
$conn = mysqli_connect("localhost","root","",$dbname);
//mysqli_select_db($dbname);
//mysqli_select_db()
$email1 = $_POST['email'];
$pwd = $_POST['password'];
$strsql ="INSERT INTO login(email,password) VALUES('$email1','$pwd')";
if(mysqli_query($conn,$strsql))
{
	echo "record successfully inserted..!";
}
else
{
	echo "mysql_error()";
}

?>


