<?php
session_start();
if (isset($_SESSION['admin'])) {
   session_destroy();
   header("location:adminlogin.php");
   echo '<script> alert("Admin account logged out");</script>';
}
