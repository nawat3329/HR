<?php 
require_once('connect.php');
session_start();
$user_id = $_SESSION['User_ID'] ;
$query = "SELECT User_FName,User_LName,User_Gender,User_DOB,User_Department,User_Position,User_Email,User_Tel,User_Address from User where User_ID=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($firstname,$lastname,$gender,$datebirth,$position,$department,$uemail,$tel,$address);
$stmt->store_result();
while ($stmt->fetch()) {}

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
                      echo "<h5>Name :".$firstname."  " .$lastname."</h5>";
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