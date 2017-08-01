<?php
	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST[email1]))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$Drug_name = $_POST['Drug_name'];
		$Usage = $_POST['Usage'];
		$Dosage = $_POST['Dosage'];
		$Ingredients = $_POST['Ingredients'];

		$query = "INSERT INTO drug_details(Drug, last_name, email, email1) VALUES('$first_name', '$last_name', '$email', '$email1'	)";
		if (!$result = mysqli_query($db,$query)) {
	        exit(mysqli_error($db));
	    }
	    echo "1 Record Added!";
	}
?>