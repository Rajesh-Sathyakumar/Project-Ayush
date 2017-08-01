<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST['CompanyCertificationKey']) && isset($_POST['CompanyCertificationKey']) != "")
{
    // get User ID
    $user_id = $_POST['CompanyCertificationKey'];


    // Get User Details
    $query = "SELECT b.CompanyName,
d.LicenseNumber,
d.ValidityDate as licenseValidity,
d.IsValid,
c.CertificationName,
a.ValidityDate as certificationValidity
FROM companycertifications a
join company_details b on b.CompanyKey=a.Company
join companylicenses d on d.CompanyLicenseKey=b.LicenseKey
join certifications c on c.CertificationKey=a.Certification
where a.CompanyCertificationKey = $user_id
";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}