<?php
if(!isset($_SESSION)){
    session_start();
    $_SESSION['type'] = $_GET['type'];
}
?>

<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Drug Name</th>
							<th>Sub Category</th>
							<th>Drug Usage</th>
							<th>Drug Dosage</th>
							<th>Drug Ingredients</th>
							<th>Drug Price</th>
							<th>Dispensing Size</th>
							<th>Drug Format</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';
        $type = $_SESSION['type'];

	$query = "SELECT * FROM drug_details where DrugType='$type'";

	if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error($db));
    }

    // if query results contains rows then fetch those rows
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    	    $approval_status=$row['approval_status'];
    	    if($approval_status=="pending") {
                $data .= '<tr>
				<td>' . $number . '</td>
				<td>' . $row['DrugName'] . '</td>
				<td>' . $row['SubCategory'] . '</td>
				<td>' . $row['DrugUsage'] . '</td>
				<td>' . $row['Dosage'] . '</td>
				<td>' . $row['Ingredients'] . '</td>
				<td>' . $row['Price'] . '</td>
				<td>' . $row['DispensingSize'] . '</td>
				<td>' . $row['DrugFormat'] . '</td>
				
				<td>
					<button onclick="GetUserDetails(' . $row['id'] . ')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteUser(' . $row['id'] . ')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
                $number++;
            }


    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>