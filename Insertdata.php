<?php
session_start();
include_once "connect.php";
if (isset($_POST['submit_form'])) {
   $fname = ($_POST['firstname']);
   $lname = ($_POST['lastname']);
   $city = ($_POST['city']);
   $ward = ($_POST['ward']);
   $street = ($_POST['street']);
   $telephone = ($_POST['tel']);
   $uname = ($_POST['uname']);
   $password = ($_POST['pwd']);

   $insert = "INSERT into user_data(Firstname, Lastname, city, Ward_no, street, contact_no, Username, Password) VALUES
('$fname','$lname','$city','$ward','$street','$telephone','$uname','$password') ";
   $command = mysqli_query($connect, $insert);
   if (!$command) {
      echo "Insert operation failed" . mysqli_error($connect);
   } else {
      echo '<script>alert("Registration successful, your username is  " . $uname . " and password 
      has been set as " . $password . "");
      </script>';
      echo "<script> location.href='Login.php';</script>";
   }
}
