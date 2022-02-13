<?php
session_start();
if (isset($_SESSION['user'])) {
   header("location:orders.php");
} else {
   echo '<script>alert("User needs to be logged in first");</script>';
   header("location:login.php");
}
