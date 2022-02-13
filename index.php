<?php
session_start();
if (isset($_SESSION['user'])) {
  $now = time();
  if ($now > $_SESSION['expire']) {
    session_destroy();
    echo '<script> alert("Session has expired")</script>';
    header("location:index.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suddha</title>
  <link rel="stylesheet" href="Styles/index.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
  <nav>
    <div>
      <a href="index.php"><img src="Images/suddha.png" alt=""></a>
    </div>
    <div><span>to Order</span>
      <?php
      if (empty($_SESSION['user'])) {
        echo '<a href="Login.php"> <input type="button" value="SIGN IN"></a>';
      } else {
        echo '<a href="Logout.php"> <input type="button" value="Logout"></a>';
      }
      ?>
    </div>
  </nav>

  <!--showcase-->

  <section class="showcase">
    <div class="container">
      <div>
        <h1>HOME OF THE ESSENTIALS</h1>
        <p>We focus on providing our customers hassle free and
          quick water delivery into their doorstep with minimal and ease of oderding through our terminal<br>
      </div>
      <div>
        <img class src="Images/delivery.svg" alt="">
      </div>
    </div>
  </section>

  <!--newsletter-->

  <section class="newsletter">
    <div class="container">
      <div>
        <h2>SIGN UP TO OUR NEWSLETTER</h2>
      </div>
      <div>
        <form action="newsletter.php" method="POST">
          <input type="email" name="email" placeholder="Enter e-mail">
          <input type="submit" name="news" value="Subscribe">
        </form>
      </div>
    </div>
  </section>


  <!--Items-->


  <div class="items">
    <div style="font-size: 24px;">
      <i class="fa fa-fire fa-5x"></i>
      <p>We provide Your home with one of the most needed and in demand home essential of highest quality
        and brand of LP gases.
      </p>
    </div>
    <div style="font-size: 24px;">
      <i class="fa fa-tint fa-5x" aria-hidden="true"></i>
      <p>From the order of the highest in quality and purity at its best, we server you withone of the best
        prducts in demand.
      </p>
    </div>
  </div>

  <!--footer-->


  <footer>

    <div class="social-btns">
      <a class="btn facebook" href="#"><i class="fa fa-facebook"></i></a>
      <a class="btn twitter" href="#"><i class="fa fa-twitter"></i></a>
      <a class="btn instagram" href="#"><i class="fa fa-instagram"></i></a>
      <a class="btn whatsapp" href="#"><i class="fa fa-whatsapp"></i></a>
    </div>
    <p>Copyright &copy 2021. Touringfo. All Rights Reserved</p>
    <div class="outer">
      <div class="inner">
        <a href="userpage.php">Order panel</a><a href="adminpage.php">Admin panel</a><a href="mailto:suddha@gmail.com">Mail us</a>
      </div>
    </div>
  </footer>

</body>

</html>