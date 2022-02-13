<?php
define('RESTRICTED', true);
require('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Styles/login.css">
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>LOGIN</title>
</head>

<body>
   <nav>
      <a href="index.php"> <img src="Images/suddha.png" alt=""></a>
   </nav>
   <div class="container">

      <div class="login-box">
         <div class="heading">
            <h3>Login</h3>
            <p>Enter credentials to login.</p>
         </div>

         <form action="log.php" method="POST">
            <div class="form-group">
               <input type="text" name="usern" required />
               <label>Enter User Name</label>
            </div>
            <div class="form-group">
               <input type="password" name="userp" required />
               <label>Enter Password</label>
            </div>
            <label class="check-box">
               <input id="checkbox" type="checkbox" checked="checked" name="remember"> Remember me </input>
            </label>
            <input type="submit" value="Login" class="login-btn" name="log" />
            <div class="outer">
               <div class="inner">
                  Not a Member yet? <a href="signup.html">Sign up</a>
                  <a href="adminlogin.php">Admin Login</a>

               </div>
            </div>
         </form>
      </div>
   </div>


   <footer>

<div class="social-btns">
  <a class="btn facebook" href="#"><i class="fa fa-facebook"></i></a>
  <a class="btn twitter" href="#"><i class="fa fa-twitter"></i></a>
  <a class="btn instagram" href="#"><i class="fa fa-instagram"></i></a>
  <a class="btn whatsapp" href="#"><i class="fa fa-whatsapp"></i></a>
</div>
<p>Copyright &copy 2021. Touringfo. All Rights Reserved</p>
   </footer>



</body>

</html>