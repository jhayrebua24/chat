<?php
require '../core/database.php';

if(isset($_POST['message'])){

  $message = $_POST['message'];
  /// SET DEFAULT TIMEZONE FOR TIMESTAMP
  date_default_timezone_set('Asia/Singapore');
  $user = $_POST['user'];
  $timestamp = date('YmdHis'); /// year mmonth day hour minute seconds

  //QUERY
  $stmt = $con->prepare("INSERT INTO chat(sender,message,timestamp) values(?,?,?)");
  $stmt->bind_param('sss', $user,$message,$timestamp);
  $stmt->execute();
  $stmt->close();

}// end isset
 ?>
