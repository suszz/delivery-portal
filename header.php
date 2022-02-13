<?php
if (defined('RESTRICTED')) {
   if (isset($_SESSION['user'])) {
      header('index.php');
      exit();
   }
}
