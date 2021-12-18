<?php
session_start();
echo $_SESSION['cemail'];

if(isset($_SESSION['cemail']))
{
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

    <title>Seller</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background: #40E0D0;
            padding: 0 10px;
        }

        .wrapper {
            max-width: 500px;
            width: 100%;
            background: #fff;
            margin: 50px auto;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125);
            padding: 30px;
        }

        .wrapper .title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color:rgb(32, 129, 194) ;
            
            text-transform: uppercase;
            text-align: center;
        }

        .wrapper .form {
            width: 100%;
        }

        .wrapper .form .inputfield {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .wrapper .form .inputfield label {
            width: 200px;
            color: #757575;
            margin-right: 10px;
            font-size: 14px;
        }

        .wrapper .form .inputfield .input,
        .wrapper .form .inputfield .textarea {
            width: 100%;
            outline: none;
            border: 1px solid #d5dbd9;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .wrapper .form .inputfield .textarea {
            width: 100%;
            height: 125px;
            resize: none;
        }

        .wrapper .form .inputfield .custom_select {
            position: relative;
            width: 100%;
            height: 37px;
        }

        .wrapper .form .inputfield .custom_select:before {
            content: "";
            position: absolute;
            top: 12px;
            right: 10px;
            border: 8px solid;
            border-color: #d5dbd9 transparent transparent transparent;
            pointer-events: none;
        }

        .wrapper .form .inputfield .custom_select select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            width: 100%;
            height: 100%;
            border: 0px;
            padding: 8px 10px;
            font-size: 15px;
            border: 1px solid #d5dbd9;
            border-radius: 3px;
        }


        .wrapper .form .inputfield .input:focus,
        .wrapper .form .inputfield .textarea:focus,
        .wrapper .form .inputfield .custom_select select:focus {
            border: 1px solid #fec107;
        }

        .wrapper .form .inputfield p {
            font-size: 14px;
            color: #757575;
        }

        .wrapper .form .inputfield .check {
            width: 15px;
            height: 15px;
            position: relative;
            display: block;
            cursor: pointer;
        }

        .wrapper .form .inputfield .check input[type="checkbox"] {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .wrapper .form .inputfield .check .checkmark {
            width: 15px;
            height: 15px;
            border: 1px solid #fec107;
            display: block;
            position: relative;
        }

        .wrapper .form .inputfield .check .checkmark:before {
            content: "";
            position: absolute;
            top: 1px;
            left: 2px;
            width: 5px;
            height: 2px;
            border: 2px solid;
            border-color: transparent transparent #fff #fff;
            transform: rotate(-45deg);
            display: none;
        }

        .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark {
            background:#1185c9;
        }

        .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark:before {
            display: block;
        }

        .wrapper .form .inputfield .btn {
            width: 100%;
            padding: 8px 10px;
            font-size: 15px;
            border: 0px;
            background: #1185c9;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
            outline: none;
        }

        .wrapper .form .inputfield .btn:hover {
            background: #ffd658;
        }

        .wrapper .form .inputfield:last-child {
            margin-bottom: 0;
        }

        @media (max-width:420px) {
            .wrapper .form .inputfield {
                flex-direction: column;
                align-items: flex-start;
            }

            .wrapper .form .inputfield label {
                margin-bottom: 5px;
            }

            .wrapper .form .inputfield.terms {
                flex-direction: row;
            }
        }
        body{
            background: url('2.jpg') no-repeat center center/cover ;
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
              <li><a class="dropdown-item" href="login-admin.php">Admin Login</a></li>
              <li><a class="dropdown-item" href="company-login.php">Company Login</a></li>
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






    <form method="POST" action="company-form.php" class="wrapper">
        <div class="title">
           Product Details
        </div>
        <div class="form">
            <div class="inputfield">
                <label> Company Name</label>
                
                <?php   echo $_SESSION['cname']; ?>    
            </div>
            <div class="inputfield">
                <label>Product Required</label>
                <input name="rproduct" type="text" class="input" required>
            </div>
            <div class="inputfield">
                <label>description</label>
                    
              <input type="textarea" name="description" rows="3" class="input">       
            </div>
            <div class="inputfield">
                <label> Quantity Required (in kg)</label>
                <input type="number" name="quantity" class="input" required>
            </div>
           
            <div class="inputfield">
                <label>Email Address</label>
                 <label><b> <?php   echo $_SESSION['cemail']; ?></b></label>     
            </div>


           
            <div class="inputfield">
                <input type="submit" name="submit" value="submit" class="btn">
            </div>
        </div>
    </form>
</body>

</html>

<?php
if(isset($_POST['submit'])){
include "../connect.php";
$name=$_SESSION['cname'];
$rproduct=$_POST['rproduct'];
$description=$_POST['description'];
$email=$_SESSION['cemail'];
$rquantity=$_POST['quantity'];

$query="INSERT INTO `buyer_form`(`cname`,`rproduct`,`description`,`email`,`rquantity`) VALUES ('$name','$rproduct','$description','$email','$rquantity')";
$result =mysqli_query($connect, $query);

echo '<script>
        alert("information added");
        window.location.href="./company-form.php";
        </script>';
}
else
{
    echo '<script> alert("error");
    window.location.href="./fill-form.php";
            </script';
}
?>



<?php
}
else{
    echo '<script>
            alert("please log in!");
            window.location.href="company-login.php";
        </script>';
}

?>