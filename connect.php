<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delivery";
$connect = mysqli_connect($servername, $username, $password, $dbname);
if (!$connect) {
   die("Couldn't connect" . mysqli_connect_error());
}
