<?php
if (isset($_POST['news'])) {
   $email = ($_POST["email"]);
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo '<script>alert("Format not valid")</script>';
      echo "<script> location.href='index.php';</script>";
   } else {
      include_once "connect.php";
      $query = "INSERT into signups VALUES('$email')";
      echo '<script>alert("You have been subscribed into our newsletter");</script>';
      echo "<script> location.href='index.php';</script>";
   }
}
