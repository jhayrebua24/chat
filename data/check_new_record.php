<?php
session_start();

require '../core/database.php';

if(isset($_POST['user'])){
  //

  $stmt = $con->prepare('SELECT * from chat');
  $stmt->execute();
  $count = mysqli_num_rows($stmt->get_result());
  $return['result'] = $count;
  $return['prev'] = $_SESSION['count_prev'];
  $stmt->close();

  if($_SESSION['count_prev'] === ""){
    $_SESSION['count_prev'] = $count;
  }else{

    if($_SESSION['count_prev'] < $count){
      $_SESSION['count_prev'] = $count; ///SET NEW COUNT RESULT IF THE NEW RESULT(COUNT IS GREATER THAN PREVIOUS C OUNT OF CHATS)
      $return['result'] = "true";
    }else{
      $return['result'] = "false";
    }

  }

  echo json_encode($return);

} //ISSET

 ?>
