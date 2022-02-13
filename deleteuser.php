<?php
session_start();
include_once "connect.php";
if (isset($_POST['delete'])) {
   $delid = $_POST['delete_id'];
   $query = "DELETE FROM user_data WHERE user_id='$delid'";
   $action = mysqli_query($connect, $query);
   if ($action) {
      echo '<script>alert("User has been removed")</script>';
      echo "<script> location.href='adminpanel.php';</script>";
   } else {
      echo '<script>alert("delete unsuccessful");</script>';
      echo "<script> location.href='adminpanel.php';</script>";
   }
}
