<?php
session_start();
$total = $_SESSION['bill'];
include "connect.php";
if (isset($_POST['paysub'])) {
   if (isset($_POST['cashpayment'])) {
      $pay = 'cash';
   } else {
      $pay = 'esewa';
   }
   $insert = "INSERT INTO orders(nam, surname, city, ward, street, telephone, item_name, 
   item_type, quantity, bill_amount, payment, userid) VALUES(
      ( SELECT Firstname FROM user_data WHERE Username='{$_SESSION['user']}'),
      ( SELECT Lastname FROM user_data WHERE Username='{$_SESSION['user']}'),
      ( SELECT city FROM user_data WHERE Username='{$_SESSION['user']}'),
      ( SELECT Ward_no FROM user_data WHERE Username='{$_SESSION['user']}'),
      ( SELECT street FROM user_data WHERE Username='{$_SESSION['user']}') ,
      ( SELECT contact_no FROM user_data WHERE Username='{$_SESSION['user']}'),
    '{$_SESSION['it_type']}',
    '{$_SESSION['it_name']}',
    '{$_SESSION['it_quantity']}',
    ' $total',
    '{$_POST['payment']}',
    ( SELECT user_id FROM user_data WHERE Username='{$_SESSION['user']}'))";
   $action = mysqli_query($connect, $insert);
   if (!$action) {
      echo "Insert operation failed" . mysqli_error($connect);
   } else {
      echo '<script> alert("Your Order has been placed, delivery will be shortly. Thankyou:)")</script>';
      echo "<script> location.href='index.php';</script>";
   }
}
