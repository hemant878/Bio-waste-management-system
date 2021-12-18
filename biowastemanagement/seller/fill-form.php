<?php
include "../connect.php";
error_reporting(0);
session_start();


if(isset($_SESSION['email']))
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
            background-image: url("background.png");
            background-repeat: no-repeat;
            background-size: cover;
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
            color:#000000 ;
            
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
            border: 1px solid #000000;
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
            border: 1px solid #000000;
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
            background: #000000;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
            outline: none;
        }

        .wrapper .form .inputfield .btn:hover {
            background: #505050;
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
        
    </style>
    <script>
    function pd(x)
    {
        if(x==0)
        document.getElementById("mypdf").style.display="block";
        else
        document.getElementById("mypdf").style.display='none';
        return;
    }


    </script>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
      <a class="navbar-brand " href="#">Bio-Medical Waste Management</a>
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
        <form method="POST" action="user-logout.php" class="d-flex" class="py-7 bg-light border">


          <a class="btn btn-outline-success" name="logout"  href="user-logout.php" role="button">logout</a>
                
         
        </form>
      </div>
    </div>
  </nav>
  <div class="mx-2 " style="font-family: monospace; font-size:20px;">
<?php
include "../connect.php";
  echo $_SESSION['email'];
?>
</div>






    <form method="POST" action="#" class="wrapper" enctype="multipart/form-data">
        <div class="title">
           Product Details
        </div>
        <div class="form">
            <div class="inputfield">
                <label> Your Name</label>
                <?php   echo $_SESSION['fname']; ?>
        <!--        <input type="text" class="input">      -->
            </div>
            <div class="inputfield">
                <label>Product Company Details</label>
                <input name="pcompany" type="text" class="input" required>
            </div>
            <div class="inputfield">
                <label>Product Componant Name</label>
                <td>
                <select id="equipment" class="input" name="equipment" required>
                    <option value="Cotton Swabs">Cotton Swabs</option>  
                  <option value="Needles">Needles</option>
                  <option value="Gloves & Masks">Gloves & Masks</option>
                  <option value="Tubes & Set">Tubes & Set</option>
                  <option value="Burner">Burner</option>
                  <option value="Discarded Glass">Discarded Glass</option>
                  <option value="Scalpels">Scalpels</option>
                  <option value="Blades">Blades</option>
                  <option value="Discarded Metal Sharp">Discarded Metal Sharp</option>
                  <option value="Cutter">Cutter</option>
                  <option value="Discarded Medicines">Discarded Medicines</option>
                  <option value="Blood Bags">Blood Bags</option>
                  <option value="Lancets">Lancets</option>

                </select>
                    
                    </td>
 <!--               <input type="Text" class="input">       -->
            </div>
    <!--        <div class="inputfield">
                <label> Product Quantity</label>
                <input type="number" name="quantity" class="input" required>
            </div>   -->
            <div class="inputfield">
                <label> Weight (in kg)</label>
                <input type="number" name="weight" class="input" required>
            </div>
           
            <div class="inputfield">
                <label>Email Address</label>
             <?php   echo $_SESSION['email']; ?>
        <!--        <input type="text" class="input">       -->
            </div>
            <div class="inputfield">
                <label>How many weeks Old Product</label>
                <input type="number" name="p_age" required class="input" required>
            </div>

            <div class="inputfield">
                <label>Condition</label>
                <td>
                    <input type="radio" id="used" onclick="pd(1)" name="condition" value="used" required>
                    <label >Used</label>
                    <input type="radio" id="expired" onclick="pd(0)" name="condition" value="expired" >
                    <label for="not_working">expired</label><br>
                  </td>
            </div>




            <div class="inputfield">
                <label>Product description</label>
                <textarea class="textarea" name="p_description" placeholder="specification of the product" required></textarea>
            </div>


            <div class="" id="mypdf" style="margin-bottom: 15px;">
            <label>bill / receipt </label>&emsp;&emsp;&emsp;
            <input type="file" name="billfile"/>
            </div>

            <?php
  
?>
           
            <div class="inputfield">
                <input type="submit" name="submit" value="submit" class="btn">
            </div>
        </div>
    </form>
</body>

</html>

<?php

if(isset($_POST['submit']))
{
    $file_name = $_FILES['billfile']['name'];
    $file_size = $_FILES['billfile']['size'];
    $file_tmp = $_FILES['billfile']['tmp_name'];
    $file_type = $_FILES['billfile']['type'];
    $pcompany=$_POST['pcompany'];
    $equipment=$_POST['equipment'];
    $quantity=$_POST['quantity'];
    $weight=$_POST['weight'];
    $email=$_SESSION['email'];
    $type=$_SESSION['type'];
    $p_age=$_POST['p_age'];
    $condition=$_POST['condition'];
    
    $p_description=$_POST['p_description'];


    if($condition=="used"){
        $query2= "INSERT INTO `form`(`pcompany`,`equipment`,`quantity`,`weight`,`email`,`p_age`,`p_condition`,`p_description`,`type`) VALUES ('$pcompany','$equipment','$quantity','$weight','$email','$p_age','$condition','$p_description','$type')";
    $res=mysqli_query($connect,$query2);
    echo '<script>
        alert("information added");
        window.location.href="./fill-form.php";
        </script>';
    }

    if(isset($file_name) and $condition=="expired")
    {
        $file_ext=strtolower(end(explode('.',$_FILES['billfile']['name'])));
        $extensions= array(/*"jpeg","jpg","png",*/"pdf");
        $errors= array();
        if(in_array($file_ext,$extensions)=== false){
            $errors[]="extension not allowed, please choose a pdf file.";
         }
         
         if($file_size > 2097152){
            $errors[]='File size must be excately 2 MB';
         }
         
         if(empty($errors)==true){
            $location = "bill/";
            move_uploaded_file($file_tmp,$location.$file_name);
            
         
    
    $filebill = "bill/".$file_name;

    $query1= "INSERT INTO `form`(`pcompany`,`equipment`,`quantity`,`weight`,`email`,`p_age`,`p_condition`,`p_description`,`bill`,`type`) VALUES ('$pcompany','$equipment','$quantity','$weight','$email','$p_age','$condition','$p_description','$filebill','$type')";
    $res=mysqli_query($connect,$query1);
echo '<script>
        alert("information added");
        window.location.href="./fill-form.php";
        </script>';
}

else{
    echo '<script>
        alert("choose pdf file less than 2mb");
        window.location.href="./fill-form.php";
        </script>';
}

}


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
            window.location.href="user-login.php";
        </script>';
}

?>