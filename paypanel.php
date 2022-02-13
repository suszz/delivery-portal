<?php
session_start();
$_SESSION['it_type'] = $_POST['items'];
$_SESSION['it_name'] = $_POST['itname'];
$_SESSION['it_quantity'] = $_POST['quantity'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Styles/paypanel.css">
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Order page</title>
</head>

<body>

   <nav>
      <a href="index.php"> <img src="Images/suddha.png" alt=""></a>
   </nav>


   <section>
      <div class="panel" style="padding-top: 20px;">
         <h3>Thank You for choosing us :)</h3><br>
         <?php
         if (isset($_POST['items']) && ($_POST['items'] == 'lpgas') && isset($_POST['quantity'])) {
            $price = 1450;
            $quantity = $_POST['quantity'];
            $charge = 50;
            $total = $price * $quantity + $charge;
            $_SESSION['bill'] = $total;
            echo "<p> Your total bill amount will be Rs. $total</p>";
         } elseif (isset($_POST['items']) && isset($_POST['quantity']) && ($_POST['items'] == 'waterjar')) {
            $price = 50;
            $quantity = $_POST['quantity'];
            $charge = 50;
            $total = $price * $quantity + $charge;
            $_SESSION['bill'] = $total;
            echo "<p> Your total bill amount will be Rs. $total</p>";
         }
         ?>
         <form method="POST" action="payinsert.php">
            <h2>Select your payment proceedings</h2><br>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script>
               function selectOnlyThis(id) {
                  for (var i = 1; i <= 2; i++) {
                     document.getElementById("Check" + i).checked = false;
                  }
                  document.getElementById(id).checked = true;
               }
            </script>
            <ul>
               <li>
                  <input type="checkbox" onclick="selectOnlyThis(this.id)" checked name="payment" value="cash" id="Check1">
                  <label for="cash">Cash on delivery</label><br>
               </li>
               <li>
                  <input type="checkbox" onclick="selectOnlyThis(this.id)" name="payment" value="esewa" id="Check2">
                  <label for="esewa">Into our <div class="tooltip"> eSewa Mechant account
                        <span class="tooltiptext">Contact no:9867122647</span>
                     </div></label>
               </li>
            </ul><br>
            <div class="button">
               <input type="submit" value="Checkout" name="paysub" id="confirm">
            </div>
         </form>


      </div>
      <div class="panel">
         <img src="Images/round.jpg" alt="" style="width:100%; height:100%; border-radius:50%;">
      </div>
   </section>

   <footer>

      <div class="social-btns">
         <a class="btn facebook" href="#"><i class="fa fa-facebook"></i></a>
         <a class="btn twitter" href="#"><i class="fa fa-twitter"></i></a>
         <a class="btn instagram" href="#"><i class="fa fa-instagram"></i></a>
         <a class="btn whatsapp" href="#"><i class="fa fa-whatsapp"></i></a>
      </div>
      <p>Copyright &copy 2021. Touringfo. All Rights Reserved</p>
   </footer>