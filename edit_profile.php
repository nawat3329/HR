<?php
session_start();
require_once('connect.php');
if (!isset($_SESSION["User_ID"])) {
  header("Location: login_form.php");
}
$User_ID = $_SESSION['User_ID'];

$query = "SELECT * from User where User_ID = ? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $User_ID);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
  $firstname = $row["User_FNAME"];
  $lastname = $row["User_LName"];
  $birthdate = $row["User_DOB"];
  $tel = $row["User_Tel"];
  $uemail = $row["User_Email"];
  $address = $row["User_Address"];
  $password = $row["User_Password"];
}


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <title>Edit user profile </title>
</head>

<body>
  <div class="py-5 " style="background-color: #97b9b5;">
    <div class="container " style="background-color: white;">
      <div class="row text-center">
        <div class="col-md-12" style="background-color: #fbdd9d;">
          <h1 class="display-4" style="color: white;font-family: 'Segoe Print';"><img style="position: relative; left: 14px;" src="image/user.png" width="50px" height="50px"> Edit user profile </h1>
        </div>
      </div>
      <br>

      <form action="edit_profile_update.php" method='post'>
        <div class="form" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 14px;">


          <label style="position: relative; left: 14px;">First name</label>
          <?php
          echo "<input type='text' name ='User_FName' style='color: #0c4876;font-size:18px;position: relative; left: 21px;' value ='" . $firstname . "' >";
          ?>
          <br>
          <label style="position: relative; left: 14px;">Last name</label>

          <?php
          echo "<input type='text' name ='User_LName' style='color: #0c4876;font-size:18px;position: relative; left: 23px;' value ='" . $lastname . "' >";
          ?>
          <br>

          <label style="position: relative; left: 14px;">Gender</label>

          <Select name="User_Gender" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 51px;">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
          <br>


          <label style="position: relative; left: 14px;">Birthdate</label>

          <?php
          echo "<input type='date' name ='User_DOB' style='color: #0c4876;font-size:18px;position: relative; left: 34px;' value ='" . $birthdate . "' >";
          ?>
          <br>

          <label style="position: relative; left: 14px;">tel no.</label>

          <?php
          echo "<input type='text' name ='User_Tel' style='color: #0c4876;font-size:18px;position: relative; left: 60px;' value ='" . $tel . "' >";
          ?>
          <br>

          <label style="position: relative; left: 14px;">Email</label>

          <?php
          echo "<input type='text' name ='User_Email' style='color: #0c4876;font-size:18px;position: relative; left: 64px;' value ='" . $uemail . "' >";
          ?>
          <br>

          <label style="position: relative; left: 14px; bottom:70px;">Address</label>

          <?php
          echo "<textarea name ='User_Address' rows = '3' cols = '40' style='color: #0c4876;font-size:18px;position: relative; left: 43px;'>" . $address . "</textarea>";
          ?>
          <br>

          <label style="position: relative; left: 14px;">Password</label>
          <?php
          echo "<input type='password' name ='User_Password' id='input' style='color: #0c4876;font-size:18px;position: relative; left: 30px;' value ='" . $password . "' >";
          ?>
          <input type="checkbox" style="position: relative; left: 30px;" onclick="myFunction()"> <label style="position: relative; left: 30px;">Show Password</label>

          <button class="btn btn-success" type='submit' name='sum' style="font-family: 'Lucida Sans';font-size: 18px;position: relative; left: 30px;">Save</button>
      </form>
      <br>

      <a class='btn btn-dark' href='user_profile.php'>Back</a>
      <script>
        function myFunction() {
          var x = document.getElementById("input");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
      </script>
      <br><br>

    </div>
  </div>
</body>

</html>