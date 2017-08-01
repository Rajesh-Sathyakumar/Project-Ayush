<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $first_name = $_POST['drug_name'];
    $last_name = $_POST['usage'];
    $email = $_POST['dosage'];
	$email1 = $_POST['ingredients'];
	$email2 = $_POST['drug_price'];

    // Updaste User details
    $query = "UPDATE drug_details SET DrugName = '$first_name', DrugUsage = '$last_name', Dosage = '$email',Ingredients = '$email1',Price = '$email2' WHERE id = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
}