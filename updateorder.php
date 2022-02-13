<?php
session_start();
include_once "connect.php";
if (isset($_POST['update'])) {
   $id = $_POST['update_id'];
   $query = "UPDATE orders SET status='delivered' WHERE userid='$id'";
   $action = mysqli_query($connect, $query);
   if ($action) {
      echo "<script> location.href='adminpanel.php';</script>";
      echo '<script>alert("Delivery confirmation done");</script>';
   } else {
      echo '<script>alert("delete unsuccessful")</script>';
      echo "<script> location.href='adminpanel.php';</script>";
   }
}
