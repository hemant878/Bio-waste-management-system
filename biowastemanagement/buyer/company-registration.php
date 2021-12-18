<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Register</title>
    <style>
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
body
{
    background-image: url("bc.png")
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url('1.jpg') no-repeat center center/cover ;

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
}
.form-image{
    position: absolute;
    right: 0px;
    
    color:black ;
    height: 60%;
    width: 27%;
    left: 764px;
    background: url('https://image.freepik.com/free-photo/table-top-with-background_1404-28.jpg') no-repeat center center/cover ;
} 

.form-group{
    
    position: absolute;
    height: 460px;

    padding: 15px;
    margin: 6px;
}
.input-group{
    padding: 7px 13px;
}
.header p{
    padding: 15px;
}
.header h2{
    font-size: 30px;
    padding: 20px;
    margin: 10px 0px;

}
.form-group input{
    background-color: rgb(255, 255, 255);
    border: brown;
    padding: 10px 57px;
    margin: 7px 0;
   
    
}
.remember{
    margin: 5px 58px;
}
.btn{
    padding: 8px 25px;
    margin: 15px 57px;
    font-size: 18px;
    background: rgb(253, 253, 253);
    box-shadow: 0 0 22px rgb(0 0 24);
    
    transition: 468.3s box-shadow;
    border: 2px solid black;
    text-decoration: none;

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




    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
                 <div class="form-body">

                  

                   <div class="form-group">
                        
                    <div class="header">

                        <h2>Company Register </h2>
                       
    
                       </div>
                    
<form method="POST" action="company-reg.php">
                    <div class="input-group">
                       <input type="email" name="email" class="type1" placeholder="Email" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="username" class="type1" placeholder="UserName" required>
                     </div>
                     <div class="input-group">
                        <input type="text" name="cname" class="type1" placeholder="Company Name" required>
                     </div>
                    <div class="input-group">
                        <input type="password" name="password" class="type2" placeholder="Password" required>
                     </div>
                     <div class="input-group">
                        <textarea name="address" style="font-size:18px; height:35px;" cols="30" rows="4" placeholder="Company Address" required></textarea>
                     </div>
                     
                   
                    <div class="input-group">
                        <button class="btn">Register</button>
                     </div>
                     </div>
</form>

                   </div>

                     <div class="form-image">
                         <h2 class="h2">welcome <br></h2>
                         <p></p>
                     </div>
            </div>                        
        </div>
    </div>
</body>

</html>