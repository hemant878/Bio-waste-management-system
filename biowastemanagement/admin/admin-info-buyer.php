<?php
include "../connect.php";
error_reporting(0);
session_start();
// echo $_SESSION['username'];

if(isset($_SESSION['username'])){
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Admin</title>

    <style>
         
table, th, td {
 
  border-collapse: collapse;
  padding-top: 5px;
}

[aria-current]{
  font-weight: bold;
}
body{
  background-image:url("green.png");
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bio-Medical Waste Management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent ">
        <ul class="navbar-nav me-auto mb-2 py-1 mb-lg-0 fs-6  ">
          <li class="nav-item">
            <a class="nav-link active" class="fs-4" aria-current="page" href="../index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../contact.php">Contact</a>
          </li>


     <!--     <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="login-admin.php">Admin Login</a></li>
              <li><a class="dropdown-item" href="../buyer/company-login.php">Company Login</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>  -->

        </ul>
        <form method="POST" action="logout.php" class="d-flex" class="py-7 bg-light border">


          <a class="btn btn-outline-success" name="logout"  href="logout.php" role="button">logout</a>
                
         
        </form>
      </div>
    </div>
  </nav>





<?php
$s="SELECT * FROM `buyer_form`";
$re=$connect->query($s);
$connect->close();
?>


<ul class="nav nav-tabs nav-fill">
    <li class="nav-item">
        <a class="nav-link active" href="admin-info-large.php">Yellow Waste</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="admin-info-small.php">Red Waste</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active"  href="admin-info.php">White Waste</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="admin-info-medical.php">Blue Waste</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active"  href="admin-info-contact.php">contact</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">buyer</a>
    </li>
</ul>
<div class="mx-2 " style="font-family: monospace; font-size:20px;">
<?php
include "../connect.php";
  echo $_SESSION['email'];
?>
</div>

<table class="table table-striped my-5  "> 
            <tr class="bg-dark text-white"> 
                <th>Company Name</th> 
                <th>required product</th> 
                <th>description</th> 
                <th>required quantity</th>
                <th>email</th> 
                <th>delete</th> 
            </tr> 
            <?php
            while($rows=$re->fetch_assoc()){  ?>
                <tr>
                <td class="bg-dark text-white"><?php echo $rows['cname'];?></td> 
                <td class="text-white"><?php echo $rows['rproduct'];?></td> 
                <td class="text-white"><?php echo $rows['description'];?></td> 
                <td class="text-white"><?php echo $rows['rquantity']." kg";?></td> 
                <td class="bg-dark text-white"><?php echo $rows['email'];?></td> 
                <td><a href="delete-buyer.php?id=<?php echo $rows['id'];?>" style="color: #ffffff">Delete</a></td>
                </tr>
<?php
            } ?>

        </table>
        <?php
}

else{
  echo '<script>
  alert("logged out");
  window.location.href="login-admin.php";
  </script>';
}

?>
      
<!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

</body>
</html>