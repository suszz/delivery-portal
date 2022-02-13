<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Styles/order.css">
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Order page</title>
</head>

<body>
   <nav>
      <a href="index.php"> <img src="Images/suddha.png" alt=""></a>
   </nav>


   <section class="panel">

      <div class="right">
         <h1>QUICK DELIVERY<br>
            REASSURED</h1>
         <p class="plain">Into your doorsteps in no time</p><br>
         <img src="Images/5227.jpg" alt="" style="width:100%;height:90%;">
      </div>

      <div class="right">
         <form action="paypanel.php" method="POST">
            <p>Category</p>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script>
               $(document).ready(function() {
                  $("#Item_type").change(function() {
                     var val = $(this).val();
                     if (val == "lpgas") {
                        $("#item-name").html(
                           "<option value='nepalgas'>Nepal Gas</option><option value='trishul'>Trishul</option><option value='everest'>Everest</option><option value='baba'>Baba</option>"
                        );
                     } else if (val == "waterjar") {
                        $("#item-name").html(
                           "<option value='waterjar' selected>-</option>");
                     }
                  });
               });
            </script>
            <select name="items" id="Item_type" required="">
               <option value="">-</option>
               <option name="lpgas" value="lpgas">Lp gas</option>
               <option name="waterjar" value="waterjar">Water Jar</option>
            </select><br>
            <select name="itname" id="item-name" required="">
               <option selected value="">-.</option>
            </select><br>
            <p>Quantity of order:</p><br>
            <input name="quantity" type="number" id="quantity" min="1" max="15" required=""><br>
            <input type="submit" name="" id="sub" value="Checkout" style="width:100px;height:50px;">
         </form>
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


</body>

</html>