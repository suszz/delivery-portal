<?php
include_once "connect.php";
if (isset($_SESSION['user'])) {
   echo "<script> location.href='orders.php';</script>";
   exit();
}
if (isset($_POST['log'])) {
   $username = ($_POST['usern']);
   $password = ($_POST['userp']);
   $query = "SELECT * from user_data where Username='$username' and Password='$password'";
   $action = mysqli_query($connect, $query);
   $count = mysqli_num_rows($action);
   if ($count == 1) {
      session_start();
      $_SESSION['user'] = $_POST['usern'];
      $_SESSION['start'] = time();
      if (!isset($_POST['remember'])) {
         $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
      } else {
         $_SESSION['expire'] = $_SESSION['start'] + (21600 * 60);
      }
      echo "<script> location.href='orders.php';</script>";
   } else {
      echo '<script> alert("Invalid Credentials");</script>';
      echo "<script> location.href='login.php';</script>";
   }
}

