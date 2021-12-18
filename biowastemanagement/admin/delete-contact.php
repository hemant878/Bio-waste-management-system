<?php
include "../connect.php";

$id=$_GET['id'];
$query="DELETE FROM contact WHERE id = '$id'";
$del = mysqli_query($connect,$query);

if($del==true)
{
    mysqli_close($connect);
   
    echo '<script>
            alert("deleted");
            window.location.href="admin-info-contact.php";
        </script>';
}
else{
    echo"error";
}
?>