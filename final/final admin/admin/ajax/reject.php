<?php
// check request
if(isset($_POST['companycertificationkey']) && isset($_POST['companycertificationkey']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $user_id = $_POST['companycertificationkey'];

    // delete User
    $query = "UPDATE  companycertifications SET ApprovalStatus = 'rejected' WHERE CompanyCertificationKey = $user_id";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
}
?>