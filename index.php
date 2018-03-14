<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();
  $_SESSION['count_prev'] = ""; ///FOR COUNTING PREVIOUS CHAT NUMBERS
     ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CHAT</title>

  <!-- CSS BS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.min.css">
</head>
<body>
  <div class="container">
    <hr>
    <!-- LOGIN  -->
    <div class="col-md-5 col-md-offset-1 well well-md text-center">
      <form class="form" id="form_login" method="post">
        <h4>Sign In</h4>
        <div class="form-group row">
          <label class="col-xs-4 col-md-4 col-form-label">Enter Username:</label>
          <div class="col-md-8 col-xs-8">
            <input type="text" maxlength="8" id="login_user" class="form-control" autofocus>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-4 col-xs-4 col-form-label">Enter Password:</label>
          <div class="col-md-8 col-xs-8">
            <input type="password" id="login_password"  class="form-control" maxlength="12" autocomplete="off">
          </div>
        </div>
        <div class="col-md-12 text-right">
          <input type="submit" name="" value="Log In" class="btn btn-primary">
        </div>
      </form>
    </div>
    <!-- END LOGIN -->

    <!-- REGISTER -->
    <div class="col-md-5 col-md-offset-1 well well-md text-center">
      <form class="form" id="form_register" method="post">
        <h4>Register</h4>
        <div class="form-group row">
          <label class="col-xs-3 col-md-3 col-form-label">Username:</label>
          <div class="col-md-9 col-xs-9">
            <input type="text" id="register_user" class="form-control" maxlength="8">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xs-3 col-md-3 col-form-label">Password:</label>
          <div class="col-md-9 col-xs-9">
            <input type="password" id="register_password" class="form-control" maxlength="12" autocomplete="off">
          </div>
        </div>
        <div class="col-md-12 text-right">
          <input type="submit" name="" value="Register" class="btn btn-danger">
        </div>
      </form>
    </div>
    <!-- END REGISTER -->
  </div>
</body>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script type="text/javascript" src="core/login_register.js"></script>
</html>
