<?php
include "../connect.php";
error_reporting(0);
$password=$_POST['password'];
$username=$_POST['username'];

$buyer_query = "SELECT * FROM `company` WHERE `username`='$username' AND `password`='$password'";
$result=mysqli_query($connect,$buyer_query);

if(mysqli_num_rows($result)<1)
{
    echo '<script>
    alert("check email and password");
    window.location.href="company-login.php" </script>';

}
else
{
    $row_users=mysqli_fetch_array($result);
    session_start();
    $_SESSION['cname']=$row_users['cname'];
    $_SESSION['cemail']=$row_users['email'];
   header("Location:company-buy.php");
}
?>