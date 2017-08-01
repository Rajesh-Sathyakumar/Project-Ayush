<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST['companycertificationkey']))
{
    // get values
    $id = $_POST['companycertificationkey'];


    // Updaste User details
    $query = "UPDATE companycertifications SET ApprovalStatus = 'approved' WHERE CompanyCertificationKey = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
}