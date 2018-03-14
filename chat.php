<!DOCTYPE html>
<?php require 'core/redirect.php' ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chat</title>
  <!-- CSS BS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel="stylesheet" href="css/chat.css">
</head>
<body>
  <div class="container">
    <h1>CHAT</h1>
    <hr>
    <div class="well well-sm col-md-8 col-xs-8">
      <div class="form-group row" id="scroll">
        <div class="col-md-12" id="chatlist">
        </div>
      </div>
      <form id="chat" method="post">
        <div class="col-md-12 col-xs-12" id="div_form">
          <input type="text" placeholder="Chat here..." maxlength="300" id="message" autofocus autocomplete="off">
          <input type="submit" class="btn btn-primary" id="btn_submit" value="SEND" disabled>
        </div>
      </form>
    </div>
    <input type="hidden" name="" id="user_id" value="<?php echo $_SESSION['LogInIdCode']; ?>">
    <div class="col-md-2">
      <a href="core/logout.php" class="btn btn-danger">LogOut</a>
    </div>
  </div>
</body>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script type="text/javascript" src="core/chat.js"></script>
</html>
