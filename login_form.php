<?php
include('login.php'); // Includes Login Script
if (isset($_SESSION['login_user'])) {
  header("location: main.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <div class="text-center py-5 " style="background-color:#447270">
    <div class="container " style="background-color: #c5e1e4;">
      <div class="row shadow">
        <div class="mx-auto col-md-6 col-10 p-5 border-primary">
          <div class="mb-4" ><img src="image/logo.jpg" width="400px" height="200px"> </div>
          <form action="login.php" method="post">
            <h3><label for="uname" style="color: #4c586f;font-family: 'Segoe Print';font-size:30px;"><b>Username</b></label>
              <div class="form-group"><input type="text" style="color: #0c4876;font-family: 'Bahnschrift';font-size:24px;" placeholder="Enter Username" name="username" required>
            </h3>
            <h3><label for="psw" style="color: #4c586f;font-family: 'Segoe Print';font: size 30px;"><b>Password</b></label>
              <div class="form-group mb-3"><input type="password" style="color: #0c4876;font-family: 'Bahnschrift';font-size:24px;" placeholder="Enter Password" name="password" required>
            </h3>
            <button type="submit" class="btn btn-primary" name="login" style="font-family: 'Lucida Sans';font-size: 18px">Login</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
</body>

</html>