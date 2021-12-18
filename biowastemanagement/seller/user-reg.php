<?php
include "../connect.php";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$type=$_POST['type'];

$query= "INSERT INTO `seller`(`first_name`, `last_name`, `password`,`email`,`contact`,`address`,`type`) VALUES ('$fname','$lname','$password','$email','$contact','$address','$type')";

$result= mysqli_query($connect,$query);

if($result==true){
    echo '<script>alert("Hurray!! Registration successful"); window.location.href="./user-login.php";</script>';
    
}
else{
    echo '<script>alert("OOPs! failed to register"); window.location.href="./user-registration.php";</script>';
}
?>