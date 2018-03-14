<?php
  session_start();
  if(!isset($_SESSION['LogInIdCode'])){
    header('location:index.php');
  }
 ?>
