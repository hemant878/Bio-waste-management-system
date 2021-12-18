<?php
include "../connect.php";
$password=$_POST['password'];
$email=$_POST['email'];

$user = "SELECT * FROM `seller` WHERE `email`='$email' AND `password`='$password'";
$result=mysqli_query($connect,$user);

if(mysqli_num_rows($result)<1)
{
    echo '<script>alert("check email and password"); window.location.href="./user-login.php";</script>';
}
else
{
    $row_users=mysqli_fetch_array($result);
    session_start();
    $_SESSION['fname']=$row_users['first_name'];
    $_SESSION['email']=$row_users['email'];
    $_SESSION['type']=$row_users['type'];
    
   header("Location: fill-form.php");
}
?>