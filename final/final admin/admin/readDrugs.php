<?php
// include Database connection file
session_start();
$_SESSION['id']="1";
include("db_connection.php");

// Design initial table header
$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Drug Id</th>
							<th>Drug Name</th>
							<th>Company Name</th>
							<th>To be approved/th>
							
						</tr>';

$query = "SELECT * FROM drug_details WHERE ApprovalStatus = 'pending' AND Company = 1";

if (!$result = mysqli_query($db,$query)) {
    exit(mysqli_error($db));
}

// if query results contains rows then featch those rows
if(mysqli_num_rows($result) > 0)
{
    $number = 1;
    while($row = mysqli_fetch_assoc($result))
    {
        $data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['DrugId'].'</td>
				<td>'.$row['DrugName'].'</td>
				
				<td>'.ABC.'</td>
				
				<td>
					<button onclick="Approval('.$['id'].')" class="btn btn-warning">approve</button>
				</td>
				
    		</tr>';
        $number++;
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
/**
 * Created by PhpStorm.
 * User: ram
 * Date: 4/1/2017
 * Time: 3:03 PM
 */