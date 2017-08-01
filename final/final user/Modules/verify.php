<?php
include 'dbh.php';
$random=$_GET['random'];
$res= mysqli_query($conn,"Select UserName,userId from users where RandomKey ='$random'");
$user= mysqli_fetch_array($res);
foreach($user as $item){
    $username=$item;
    $id=$item;
}
if (!$re = mysqli_query($conn,"UPDATE users SET Status='new',RandomKey=NULL WHERE UserId='$id'")) {
    exit(mysqli_error($conn));
}
else{
    header('Location: '."login.php");
}

?>
