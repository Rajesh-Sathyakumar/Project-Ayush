<?php

	if(isset($_POST['drug_name']) && isset($_POST['sub_category']) && isset($_POST['usage']) && isset($_POST['dosage']) && isset($_POST['ingredients']) && isset($_POST['drug_price']) && isset($_POST['dispensing_size']) && isset($_POST['drug_format']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values
        $did = $_POST['drug_id'];
		$first_name = $_POST['drug_name'];
		$sub_category = $_POST['sub_category'];
		$last_name = $_POST['usage'];
		$email = $_POST['dosage'];
		$email1 = $_POST['ingredients'];
		$email2 = $_POST['drug_price'];
		$dispensing_size = $_POST['dispensing_size'];
		$drug_format = $_POST['drug_format'];
$query = "INSERT INTO drug_details(DrugName, SubCategory, DrugUsage, Dosage, Ingredients, Price, Company, Drug,approval_status,DispensingSize,DrugFormat) VALUES('$first_name','$sub_category','$last_name', '$email', '$email1', '$email2',1,2, 'pending','$dispensing_size','$drug_format')";
		//$query = "INSERT INTO drug_details(DrugName, SubCategory, DrugUsage, Dosage, Ingredients, Price, Company, Drug,approval_status,DispensingSize,DrugFormat) VALUES('test','test','test', 'test', 'test', 'test',1,2, 'pending','test','test')";
if (!$result = mysqli_query($db,$query)) {

    //$query = "INSERT INTO drug_details(DrugName, SubCategory, DrugUsage, Dosage, Ingredients, Price, Company, Drug,approval_status,DispensingSize,DrugFormat) VALUES('test','test','test', 'test', 'test', 'test',1,2, 'pending','test','test')";
            exit(mysqli_error($db));
	    }
	    //echo "1 Record Added!";
	}
?>