<?php
require '../core/database.php';

if(isset($_POST['user'])){

  $user = $_POST['user'];

  //query select all on chat table
  $stmt = $con->prepare("SELECT * FROM chat ORDER BY timestamp ASC"); /// order to ascending
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()):
    if($row['sender'] == $user){ /// CHECK IF THE MESSAGE IS FROM YOU(USER)
      $pos = "margin-left"; ///POSITION RIGHT IF MESSAGE IS FROM USER
      $class = "yourChat"; // CLASS IF CHAT IS FROM USER
    }else{
      $pos = "margin-right";
      $class = "Others"; // CLASS IF CHAT IS FROM USER
    }
    ?>

  <div class="<?php echo $class ?>" style="<?php echo $pos ?>:50%" id="chatline">
    <?php if($row['sender'] != $user) {?>
      <b><?= $row['sender'] ?></b> :
    <?php }else{ ?>
        Me:
    <?php } ?>
    <?= $row['message'] ?>
  </div>

  <?php
  endwhile;
}// end isset


 ?>
