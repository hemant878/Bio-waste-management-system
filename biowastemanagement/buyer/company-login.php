<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Login</title>
    <style>
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
body{
    background-image: url("background.png")
}
.container{
    display: flex;
    position: relative;
    left: 100px;
    justify-content: center;
    align-items: center;
    height: 100vh;
     

}

.container  .form-container{
  
    display: flex;
    align-items: center;
    width: 50vw;
    height: 60vh;
    background: rgb(248, 250, 249);
    box-shadow: 0 0 30px rgb(0 0 24);
    
    transition: 468.3s box-shadow;
}

.form-body{
    display: flex;
    align-items: center;
    text-align: center;
}
.form-image{
    position: absolute;
    right: 0px;
    color:black ;
    height: 70%;
    width: 27%;
    left: 764px;
     
} 

.form-group{
    
    position: fixed;
    height: 350px;

    padding: 15px;
    margin: 6px;
    
}
.input-group{
    padding: 15px 13px;
    
}
.header p{
    padding: 15px;
}
.header h2{
    padding: 20px;
    font-size: 30px;
}
.form-group input{
    background-color: rgb(255, 255, 255);
    border: brown;
    padding: 10px 57px;
    margin: 3px 0;
   
    
}
.remember{
    margin: 5px 58px;
}
.btn{
    padding: 8px 25px;
    margin: 0px 57px;
    font-size: 18px;
    
    text-decoration: none;
    position:relative;
    left:50px;




}
.type1{
    box-shadow: 0 0 22px rgb(0 0 24);
    
    transition: 468.3s box-shadow;

}
.type2{
    box-shadow: 0 0 22px rgb(0 0 24);
    
    transition: 468.3s box-shadow;

}
.h2{
    
    padding: 4px 157px;
}
.heading{
    position: relative;
    left:100px;
    
}
.id{
    position:relative;
    left:100px;
}
.para{
    position:relative;
    left:100px;

}





    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
                 <div class="form-body">

                  

                   <div class="form-group">
                        
                    <div class="header">

                        <h1 class="heading">Company Login </h1>
                        <p class="para">Don't have an account? <a href="company-registration.php">Create One!!</a></p>
    
                       </div>
                    
<form method="POST" action="company-auth.php">
                    <div class="id">
                    <div class="input-group">
                       <input type="text" name="username" class="type1" placeholder="UserName" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" class="type2" placeholder="Password" required>
                     </div>
                     </div>
          <!--           <div class="input-group">
                         <div class="remember">
                        <input type="checkbox" id="Checkbox"><label for="checkbox">Remaimber me</label>
                    </div>       -->
                    <div class="btn">
                    <div class="input-group">
                        <button class="btn">Login</button>
                     </div>
                     </div>


                     </div>
</form>

                   </div>

                     
            </div>                        
        </div>
    </div>
</body>

</html>