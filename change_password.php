<?php
require_once('connect.php');
session_start();

?>
<!--edit password-->
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <h1 class="display-4">Change password</h1>
        <div class="container">
          <div class="mx-auto col-md-7 p-5">
            <form class="form-inline d-flex justify-content-center" action="password_update.php" method='post'>
              <?php
              echo '<h5 class="">Current Password :<input type="password" placeholder=" Enter Current Password " name="curpsw" required></h5>';
              echo '<h5 class="">New Password :<input type="password" placeholder=" Enter New Password " name="newpsw" required></h5>';
              echo '<h5 class="">Confirm New Password :<input type="password" placeholder=" Enter New Password " name="conpsw" required></h5>';
              echo '<a class="btn btn-primary btn-md" name="chpass"href="user_profile.php">Change password</a>';
              ?>
            </form>
          </div>
          <div class="row">
            <div class="col-md-8 justify-content-center p-3"><a class="btn btn-primary btn-lg" href="user_profile.php">Back</a></div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>