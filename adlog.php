<?php
include_once "connect.php";
if (isset($_POST['adlog'])) {
   $adminuser = ($_POST['admin']);
   $adminpassword = ($_POST['adminpass']);
   $command = "SELECT * from admin_panel WHERE username='$adminuser'and password='$adminpassword'";
   $return = mysqli_query($connect, $command);
   $counts = mysqli_num_rows($return);
   if ($counts == 1) {
      session_start();
      $_SESSION['admin'] = $_POST['admin'];
      $_SESSION['start'] = time();
      if (!isset($_POST['remember'])) {
         $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
      } else {
         $_SESSION['expire'] = $_SESSION['start'] + (21600 * 60);
      }
      echo "<script> location.href='adminpanel.php';</script>";
   } else {
      echo '<script> alert("Invalid Credentials");</script>';
      echo "<script> location.href='adminlogin.php';</script>";
   }
}
