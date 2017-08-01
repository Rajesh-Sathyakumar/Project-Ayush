<?php
// include Database connection file
include("db_connection.php");

// Design initial table header
$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Company Name</th>
							<th>Company License Number</th>
							<th>Certificate</th>
							<th>To Be Approved</th>
							
						</tr>';

$query = "select 
a.CompanyName,
d.CertificationName,
c.LicenseNumber
FROM
company_details a
join companycertifications b on b.Company=a.CompanyKey
join companylicenses c on c.CompanyLicenseKey=a.LicenseKey
join certifications d on d.CertificationKey=b.Certification
where b.ApprovalStatus='pending'";

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
				<td>'.$row['CompanyName'].'</td>
				<td>'.$row['LicenseNumber'].'</td>
				<td>'.$row['CertificationName'].'</td>
				
				
				
				
				<td>
					<button onclick="Approval('.$row['id'].')" class="btn btn-warning">approve</button>
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