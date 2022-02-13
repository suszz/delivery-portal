<?php
session_start();
if (isset($_SESSION['admin'])) {
   $now = time();
   if ($now > $_SESSION['expire']) {
      session_destroy();
      echo '<script> alert("Session has expired")</script>';
      header("location:adminlogin.php");
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
   <link rel="stylesheet" href="Styles/adminpanel.css">
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
   <nav>
      <a href="index.php"><img src="Images/suddha.png" alt=""></a>
      <a href="adlogout.php" class="logout"> <input type="button" value="LOGOUT"></a>
   </nav>
   <h2>User Orders</h2>
   <section>
      <?php
      include_once "connect.php";
      $query = "SELECT * FROM orders";
      $query_run = mysqli_query($connect, $query);
      ?>
      <table width="80%" height="20%" border="1">
         <thead>
            <tr>
               <th>Name</th>
               <th>Surname</th>
               <th>City</th>
               <th>Ward</th>
               <th>Street</th>
               <th>Telephone</th>
               <th>Item name</th>
               <th>Item type</th>
               <th>Quantity</th>
               <th>Bill Amount</th>
               <th>Payment method</th>
               <th>User ID</th>
               <th>Clear order</th>
               <th>Status</th>

            </tr>
         </thead>
         <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
               while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                  <tr>
                     <td><?php echo $row['nam']; ?></td>
                     <td><?php echo $row['surname']; ?></td>
                     <td><?php echo $row['city']; ?></td>
                     <td><?php echo $row['ward']; ?></td>
                     <td><?php echo $row['street']; ?></td>
                     <td><?php echo $row['telephone']; ?></td>
                     <td><?php echo $row['item_name']; ?></td>
                     <td><?php echo $row['item_type']; ?></td>
                     <td><?php echo $row['quantity']; ?></td>
                     <td><?php echo $row['bill_amount']; ?></td>
                     <td><?php echo $row['payment']; ?></td>
                     <td><?php echo $row['userid']; ?></td>
                     <td>
                        <form action="updateorder.php" method="POST">
                           <input type="hidden" name="update_id" value="<?php echo $row['userid']; ?>"">
                        <button type=" submit" name="update">
                           <p>CONFIRM</p></button>
                     <td><?php echo $row['status']; ?></td>

                     </form>
                     </td>
                  </tr>
            <?php
               }
            } else {
               echo '<script> alert("Records not found")</script>';
            }
            ?>
         </tbody>
      </table>
   </section>
   <section>
      <h2>Users</h2>
      <?php
      include_once "connect.php";
      $delquery = "SELECT Firstname, Lastname, city, Username, Password, user_id FROM user_data";
      $delquery_run = mysqli_query($connect, $delquery);
      ?>
      <table width="80%" height="20%" border="1">
         <thead>
            <tr>
               <th>Firstame</th>
               <th>Surname</th>
               <th>City</th>
               <th>Username</th>
               <th>Password</th>
               <th>User Id</th>
               <th>Remove User</th>
            </tr>
         </thead>
         <tbody>
            <?php
            if (mysqli_num_rows($delquery_run) > 0) {
               while ($row = mysqli_fetch_assoc($delquery_run)) {
            ?>
                  <tr>
                     <td><?php echo $row['Firstname']; ?></td>
                     <td><?php echo $row['Lastname']; ?></td>
                     <td><?php echo $row['city']; ?></td>
                     <td><?php echo $row['Username']; ?></td>
                     <td><?php echo $row['Password']; ?></td>
                     <td><?php echo $row['user_id']; ?></td>
                     <td>
                        <form action="deleteuser.php" method="POST">
                           <input type="hidden" name="delete_id" value="<?php echo $row['user_id']; ?>"">
                        <button type=" submit" name="delete">
                           <p>REMOVE</p></button>
                        </form>
                     </td>
                  </tr>
            <?php
               }
            } else {
               echo '<script> alert("Records not found")</script>';
            }
            ?>
         </tbody>
      </table>
   </section>
</body>

</html>