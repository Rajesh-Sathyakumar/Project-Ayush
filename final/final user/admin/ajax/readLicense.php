<?php
// include Database connection file
include("db_connection.php");

// Design initial table header
$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>License Number</th>
							<th>Validity Date</th>
							<th>Company Name</th>
							
							<th>Approve</th>
							<th>Reject</th>
						</tr>';

$query = "select 
a.LicenseNumber,a.ValidityDate,b.CompanyName
FROM
companylicenses a
join company_details b on b.LicenseKey=a.CompanyLicenseKey

where a.approval_status='pending'";

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
				<td>'.$row['LicenseNumber'].'</td>
				<td>'.$row['ValidityDate'].'</td>
				<td>'.$row['CompanyName'].'</td>
				
				
				<td>
					<button onclick="GetLicenseDetails('.$row['LicenseNumber'].')" class="btn btn-warning">Approve</button>
				</td>
				<td>
					<button onclick="rejectDrug('.$row['LicenseNumber'].')" class="btn btn-danger">Reject</button>
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