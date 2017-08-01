<?php
	if(isset($_POST['drug_name']) && isset($_POST['usage']) && isset($_POST['dosage']) && isset($_POST['ingredients']) && isset($_POST['drug_price']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$first_name = $_POST['drug_name'];
		$last_name = $_POST['usage'];
		$email = $_POST['dosage'];
		$email1 = $_POST['ingredients'];
		$email2 = $_POST['drug_price'];

		$query = "INSERT INTO drug_details(DrugName, DrugUsage, Dosage, Ingredients, Price, Company, Drug) VALUES('$first_name', '$last_name', '$email', '$email1', '$email2',1,2)";
		if (!$result = mysqli_query($db,$query)) {
	        exit(mysqli_error());
	    }
	    echo "1 Record Added!";
	}
?>