<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST['LicenseNumber']))
{
    // get values
    $id = $_POST['LicenseNumber'];


    // Updaste User details
    $query = "UPDATE companylicense SET approval_status = 'approved' WHERE LicenseNumber = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
}