<?php
session_start();
if (isset($_SESSION['user'])) {
   session_destroy();
   header("location:index.php");
   echo '<script> alert("You have logged out");</script>';
}
