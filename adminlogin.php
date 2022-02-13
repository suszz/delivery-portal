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
   <link rel="stylesheet" href="Styles/adminlogin.css">
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>LOGIN</title>
</head>

<body>
   <h1><a href="index.php">HOMEPAGE</a></h1>
   <div class="container">

      <div class="login-box">
         <div class="heading">
            <h3>Admin Log</h3>
         </div>

         <form action="adlog.php" method="POST">
            <div class="form-group">
               <input type="text" name="admin" required />
               <label>Enter User Name</label>
            </div>
            <div class="form-group">
               <input type="password" name="adminpass" required />
               <label>Enter Password</label>
            </div>
            <label class="check-box">
               <input id="checkbox" type="checkbox" checked="checked" name="remember"> Remember me </input>
            </label>
            <input type="submit" value="Login" class="login-btn" name="adlog" />
         </form>
      </div>
   </div>


</body>

</html>