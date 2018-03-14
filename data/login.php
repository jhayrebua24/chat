<?php
require '../core/database.php';

if(isset($_POST['user'])){
  session_start();
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $pass = md5($pass);

  //query
  $stmt = $con->prepare("SELECT username,password FROM users WHERE username = ? and password = ?");
  $stmt->bind_param('ss',$user,$pass);
  $stmt->execute();
  $result = mysqli_num_rows($stmt->get_result()); //CHECK IF THE USER EXISTS OR NOT
  //IF RESULT greater than 0 = USER EXIST
  if($result > 0 ){
    $_SESSION['LogInIdCode'] = $user; //CAMEL CASE LOGIN SESSION
    $return['url'] = "chat.php";
    $return['status'] = "yes";
  }else
    $return['status'] = "no";

    echo json_encode($return);
    $stmt->close();
}

 ?>
