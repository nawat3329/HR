<?php 
require_once('connect.php');
session_start();
$_SESSION['test'] = 1;
if (isset($_SESSION['test'])) {
  $firstname = $_SESSION['User_FName'];
  $lastname = $_SESSION['User_LName'];
  $position=$_SESSION['User_Position'];
	$department=$_SESSION['User_Department'];
	$gender=$_SESSION['User_Gender'];
  $datebirth=$_SESSION['User_DOB'];
  $tel=$_SESSION['User_Tel'];
  $uemail=$_SESSION['User_Email'];
  $address=$_SESSION['User_Address'];
  $quota=$_SESSION['User_Quota'];
  echo 'yeah';
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>User Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>
<body>
<div class="py-5" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4">User profile</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="py-5">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <?php 
                      echo "<h5>Name :".$firstname."" .$lastname."</h5>";
                      echo "<h5>Position :".$position."</h5>";
                      echo "<h5>Department :".$department."</h5>";
                      echo "<h5>Gender :".$gender."</h5>";
                      echo "<h5>Birth :".$datebirth."</h5>";
                      echo "<h5>Telephone no:".$tel."</h5>";
                      echo "<h5>Email :".$uemail."</h5>";
                      echo "<h5>Address :".$address."</h5>";
                      echo "<h5>Quota remaining :".$department."</h5>";
                      ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-8"></div>
                        <div class="col-md-3 align-items-center d-flex justify-content-center p-3"> <a class="btn btn-primary btn-lg" href="main.php">Back</a> </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 justify-content-center p-3"><a class="btn btn-primary btn-lg" href="edit_profile.php">Edit</a></div>
                        <div class="col-md-3 align-items-center d-flex justify-content-center p-3"> <a class="btn btn-primary btn-lg" href="change_password.html">Change Password</a> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>