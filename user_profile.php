<?php
require_once('connect.php');
session_start();
$user_id = $_SESSION['User_ID'];
$query = "SELECT User_FName,User_LName,User_Gender,User_DOB,User_Department,User_Position,User_Email,User_Tel,User_Address from User where User_ID=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($firstname, $lastname, $gender, $datebirth, $position, $department, $uemail, $tel, $address);
$stmt->store_result();
while ($stmt->fetch()) {
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
  <div class="py-5 " style="background-color: #f4f2dd;">
    <div class="container " style="background-color: white;">
      <div class="row text-center">
        <div class="col-md-12" style="background-color: #97b9b5;">
          <h1 class="display-4" style="color: white;font-family: 'Segoe Print';"><img style="position: relative; left: 14px;" src="image/profile.png" width="50px" height="50px"> User profile </h1>
        </div>
      </div>
      <br>
      <div style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 23px;">
        <?php
        echo "<h5 style=\"color: #0c4876;font-family: \'Bahnschrift\';font-size:18px;position: relative; left: 23px;\">Name :" . $firstname . "  " . $lastname . "</h5>";
        echo "<h5 style=\"color: #0c4876;font-family: \'Bahnschrift\';font-size:18px;position: relative; left: 23px;\">Position :" . $position . "</h5>";
        echo "<h5 style=\"color: #0c4876;font-family: \'Bahnschrift\';font-size:18px;position: relative; left: 23px;\">Department :" . $department . "</h5>";
        echo "<h5 style=\"color: #0c4876;font-family: \'Bahnschrift\';font-size:18px;position: relative; left: 23px;\">Gender :" . $gender . "</h5>";
        echo "<h5 style=\"color: #0c4876;font-family: \'Bahnschrift\';font-size:18px;position: relative; left: 23px;\">Birth :" . $datebirth . "</h5>";
        echo "<h5 style=\"color: #0c4876;font-family: \'Bahnschrift\';font-size:18px;position: relative; left: 23px;\">Telephone no:" . $tel . "</h5>";
        echo "<h5 style=\"color: #0c4876;font-family: \'Bahnschrift\';font-size:18px;position: relative; left: 23px;\">Email :" . $uemail . "</h5>";
        echo "<h5 style=\"color: #0c4876;font-family: \'Bahnschrift\';font-size:18px;position: relative; left: 23px;\">Address :" . $address . "</h5>";
        ?>
      </div>
      <a class="btn btn-dark btn-lg" style="font-family: 'Lucida Sans';font-size: 18px;position: relative; left: 30px;" href="main.php">Back</a>
      <a class="btn btn-primary btn-lg" style="font-family: 'Lucida Sans';font-size: 18px;position: relative; left: 935px;" href="edit_profile.php">Edit</a>
      <br><br>


    </div>
  </div>

</body>

</html>