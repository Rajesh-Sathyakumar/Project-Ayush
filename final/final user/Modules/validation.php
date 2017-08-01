<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function showhide()
        {
            var div = document.getElementById("show");
            if (div.style.display !== "block") {
                div.style.display = "block";
            }
            else {
                div.style.display = "none";
            }
        }
    </script>
    <script type="text/javascript">
        function show(elementId) {
            document.getElementById("id1").style.display="none";
            document.getElementById(elementId).style.display="block";
        }
    </script>
</head>
<body>
<?php
if(!isset($_SESSION)){
    session_start();

}
function validate($user,$password)
{
include 'dbh.php';
$conn=mysqli_connect("localhost","root","","ayush");
$pass=md5($password);
$result = mysqli_query($conn, "SELECT * FROM users WHERE UserName = '" . $user. "' AND Password='".$pass."'");
if ($row = mysqli_fetch_array($result))
{
    if($row['Status']=="locked"){
?>






        <div class="alert alert-danger">
            <div onclick="show('id1');"><strong>Your Account is locked, please reset your account.Click here</strong></div>

           </div>
        <div id="id1"  style="display:none">
            <form method="post" action="reset.php">
                <input type="text" id="resetemail"/>
                <input type="submit"/>
            </form>

        </div>
        </div>
        </div>

        <?php

    }else{
        $_SESSION['id'] = $row['UserId'];
        $_SESSION['name']=$row['UserName'];
        $val=$_SESSION['id'];
        $_SESSION['cid']=$row['CompanyId'];
        $result1 = mysqli_query($conn, "SELECT * from companylicenses where CompanyLicenseKey IN (SELECT LicenseKey from company_details where CompanyKey IN (SELECT CompanyId from users where UserId='$val'))");

        if ($row1 = mysqli_fetch_array($result1))
        {
            $_SESSION['exp_lic']=$row1['ValidityDate'];
            $_SESSION['lic_status']=$row1['approval_status'];


        }
        header('Location: '."../dashboard/index.php");

    }


 }else {
    $res = mysqli_query($conn, "SELECT Count FROM users WHERE UserName='$user' and status='active'");
    $val = mysqli_fetch_array($res);
    $count = 0;
    if($val) {
        foreach ($val as $item) {
            $count = $item;
        }
      //  echo $count;

        $count += 1;
        if (!$re = mysqli_query($conn, "UPDATE users SET count='$count' WHERE UserName='$user'")) {
            exit(mysqli_error($conn));
        }
        if ($count >= 3) {
            if (!$re = mysqli_query($conn, "UPDATE users SET Status='locked' WHERE UserName='$user'")) {
                exit(mysqli_error($conn));
            }
        }
    }
    ?>
    <div class="alert alert-danger">
  <strong>Username or Password is wrong</strong>
    </div>
<?php
//    header('Location: ' . "login.php");

}
$conn->close();
}
?>

</body>
</html>