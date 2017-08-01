<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $drug_id = "123";
    $drug_name = $_POST['drug_name'];
    $company = $_POST['company'];
    $usage = $_POST['usage'];
    $dosage = $_POST['dosage'];
    $ingredients = $_POST['ingredients'];
    $price = "47.35";
    $company1 = "1";
    $drug1 = "2";
    // Updaste User details
    $query = "UPDATE drug_details SET Drug = '$drug1', DrugName = '$drug_name', DrugUsage = '$usage', Dosage = '$dosage' , Company = '$company1' Price = '$price' WHERE DrugId = '$drug_id' ";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error($db));
    }
}