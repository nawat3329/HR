<?php
session_start();
require_once('connect.php');
if(!isset($_SESSION["User_ID"])) {
  header ("Location: login_form.php"); 
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
  $password=$row["User_Password"];
}


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Edit user profile </title>
</head>

<body>
  <p></p>
  <nav class="navbar" style='height:80px; background-color: dodgerblue;'>
    <span class="navbar-brand mb-0 h1">Edit user profile</span>
  </nav>
  <p></p>





  <form action="edit_profile_update.php" method='post'>
    <div class="container">
      <div class="row">
        <div class="w-100"> </div>
        <div class="col-sm">
          <h5>First name</h5>
        </div>
        <?php
        echo "<input type='text' name ='User_FName' value ='" . $firstname . "' >";
        ?>
        <div class="col-sm"></div>
        <div class="w-100"> </div>
        <div class="col-sm">
          <h5>Last name</h5>
        </div>
        <?php
        echo "<input type='text' name ='User_LName' value ='" . $lastname . "' >";
        ?>
     
          <h5>Gender</h5>
        </div>
        <div class="col-sm">
          <Select name="User_Gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="col-sm"></div>
        <div class="w-100"></div>
        <div class="col-sm">
          <h5>Birthdate</h5>
        </div>
        <?php
        echo "<input type='date' name ='User_DOB' value ='" . $birthdate . "' >";
        ?>
        <div class="col-sm"></div>
        <div class="w-100"></div>
        <div class="col-sm">
          <h5>tel no.</h5>
        </div>
        <?php
        echo "<input type='text' name ='User_Tel' value ='" . $tel . "' >";
        ?>
        <div class="col-sm"></div>
        <div class="w-100"></div>
        <div class="col-sm">
          <h5>Email</h5>
        </div>
        <?php
        echo "<input type='text' name ='User_Email' value ='" . $uemail . "' >";
        ?>
        <div class="col-sm"></div>
        <div class="w-100"></div>
        <div class="col-sm">
          <h5>Address</h5>
        </div>
        <?php
        echo "<textarea name ='User_Address' rows = '3' cols = '40' >" . $address . "</textarea>";
        ?>
        <div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Password</h5></div>
	<div class="col-sm">
	<?php
		echo "<input type='password' name ='User_Password' id='input' value ='".$password."' >";
	?>
	<p></p>
	<input type="checkbox" onclick="myFunction()"> Show Password
	</div>
	<div class="col-sm"></div>
</div>

	<p></p>
	<button type='submit' name='sum' class ='btn-success' >Save</button>
	<p></p>
	</form>
	<a class ='btn btn-primary' href ='user_profile.php'>Back</a>
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
</body>

</html>