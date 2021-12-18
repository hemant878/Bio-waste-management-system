<?php
include "../connect.php";
error_reporting(0);
session_start();
// echo $_SESSION['cemail'];

if(isset($_SESSION['cemail'])){
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

    <title>Buyer</title>

    <style>
         
table, th, td {
 
  border-collapse: collapse;
  padding-top: 5px;
  font-family: cursive;
}
button{
  font-family: cursive;
}
h2{

  font-family: monospace;
  font-weight: 900;

}

[aria-current]{
  font-weight: bold;
}
body{
  background-image:url('red.png');
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


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../admin/login-admin.php">Admin Login</a></li>
              <li><a class="dropdown-item" href="../buyer/company-login.php">Company Login</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

        </ul>
        <form method="POST" action="company-logout.php" class="d-flex" class="py-7 bg-light border">


          <a class="btn btn-outline-success" name="logout"  href="company-logout.php" role="button">logout</a>
                
         
        </form>
      </div>
    </div>
  </nav>





<?php
$small="SELECT * FROM `form` WHERE `equipment`='Gloves & Masks' OR `equipment`='Tubes & Set'";
$re=$connect->query($small);
$connect->close();
?>


<ul class="nav nav-tabs nav-fill">
    <li class="nav-item">
        <a class="nav-link active bg-warning text-dark"  href="company-large.php">Yellow  Waste</a>
    </li>
    <li class="nav-item bg-danger">
        <a class="nav-link active bg-danger text-white" aria-current="page" href="#">Red Waste</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active"  href="company-buy.php">White Waste</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active bg-primary text-white" href="company-medical.php">blue Waste</a>
    </li>
</ul>
<div class="mx-2 " style="font-family: monospace; font-size:20px;">
<?php
include "../connect.php";
  echo $_SESSION['cemail'];
?>
</div>
<center><h2 style="margin: 10px 0 10px 0" class="my-3"> Red Category Bio-Medical Waste </h2></center> 
<a href="company-form.php"><button type="button" class=" my-2 btn btn-danger my-1 " style="margin:0px 0 0 20px"> Buying Form</button></a>
<table class="table table-striped ">  
            <tr class="bg-danger"> 
                <th>Item</th> 
            <!--    <th>Quantity</th> -->
                <th>weight</th>
                <th>Description</th> 
                <th>Condition</th>
                <th>Email</th> 
            </tr> 
            <?php
            while($rows=$re->fetch_assoc()){  ?>
                <tr>
                <td class="table-danger"><?php echo $rows['equipment'];?></td> 
             <!--   <td class="table-danger" ><?php //echo $rows['quantity'];?></td> -->
                <td class="table-danger" ><?php echo $rows['weight']." kg";?></td>
                <td class="table-danger"><?php echo $rows['p_description'];?></td> 
                <td class="table-danger"><?php echo $rows['p_condition'];?></td> 
                <td class="table-danger"><?php echo $rows['email'];?></td> 
                </tr>
<?php
            } ?>

        </table>
        <?php
}

else{
  echo '<script>
  alert("logged out");
  window.location.href="company-login.php";
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