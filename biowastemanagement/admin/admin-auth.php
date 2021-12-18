<?php
include "../connect.php";
error_reporting(0);
$username=$_POST['username'];
$password=$_POST['password'];


$user = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
$result=mysqli_query($connect,$user);

if(mysqli_num_rows($result)<1)
{
    echo '<script>alert("check email and password"); window.location.href="./login-admin.php";</script>';
}
else
{
    $row_users=mysqli_fetch_array($result);
    session_start();
    $_SESSION['username']=$row_users['username'];
    $_SESSION['email']=$row_users['email'];
    header("Location: admin-info.php");
}
?>