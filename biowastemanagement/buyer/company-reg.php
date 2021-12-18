<?php
include "../connect.php";

$email=$_POST['email'];
$username=$_POST['username'];
$cname=$_POST['cname'];
$password=$_POST['password'];
$address=$_POST['address'];


$query= "INSERT INTO `company`(`email`, `username`, `password`,`cname`,`address`) VALUES ('$email','$username','$password','$cname','$address')";

$result= mysqli_query($connect,$query);

if($result==true){
    echo '<script>alert("Hurray!! Registration successful"); 
     window.location.href="./company-login.php";
    </script>';
    
}
else{
    echo '<script>alert("Oops!failed to register"); window.location.href="./company-registration.php";</script>';
}
?>