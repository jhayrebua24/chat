<?php

require '../core/database.php';

if(isset($_POST['user'])){

  $user = $_POST['user'];
  $password = $_POST['pass'];
  $password = md5($password);

  //query
  $stmt = $con->prepare("INSERT INTO users(username,password) values(?,?)");
  $stmt->bind_param('ss',$user,$password);
  if($stmt->execute()){
    $return['status'] = "Registered!";
  }
  echo json_encode($return);
  $stmt->close();
}


 ?>
