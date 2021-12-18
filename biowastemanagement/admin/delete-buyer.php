<?php
include "../connect.php";

$id=$_GET['id'];
$query="DELETE FROM buyer_form WHERE id = '$id'";
$del = mysqli_query($connect,$query);

if($del==true)
{
    mysqli_close($connect);
   
    echo '<script>
            alert("deleted");
            window.location.href="admin-info-buyer.php";
        </script>';
}
else{
    echo"error";
}
?>