<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];


    // Updaste User details
    $query = "UPDATE drug_details SET ApprovalStatus = 'approved' WHERE id = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
}