<?php
session_start();
if (isset($_SESSION['admin'])) {
   header("location:adminpanel.php");
} else {
   echo '<script>alert("User needs to be logged in first");</script>';
   header("location:adminlogin.php");
}
