<!--- main page after login --->
<?php 
  session_start();
  require('connect.php');
  $firstname = $_SESSION['firstname'];
  $user_position = $_SESSION['user_position']
?>
<!DOCTYPE html>
<html>
<head>
<title>main page</title>
<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
  <div class="Welcome">
  
    <h1>Welcome back!</h1>
  
  </div>
  
  <!--<div class="Calendar">
    <img src="calendar.png" alt="calendar" class="calendar">
  </div>-->
  <div class="Name">
  <?php
    echo "<h3>Name: ".$firstname."<h3>";
  ?>
  <h3>Quota remaining:<h3>
  </div>
  <div class="userfunc">
    <div class="request-leave">
    <button type="button">Request Leave</button>
    </div>
    <div class="edit-profile">
    <button type="button">Profile</button>
    </div>
  </div>
  
  <!--Different button for different position-->

  <div class="specialfunc">
  
    <div class="sf1">
    <?php
    if ($user_position == "hr"){
      echo '<h3>HR</h3>';
    echo '<button type="button">Leaving Request</button>';
    echo '<button type="button">User Quota</button>';
    echo '<button type="button">Edit Calendar</button>';
    }
    ?>
  </div>
  

    <div class="sf2">
    <?php
    if ($user_position == "admin"){
    echo '<h3>Admin</h3>';
    echo '<button type="button">Register New Staff</button>';
    echo '<button type="button">List of User</button>';
    echo '<button type="button">Reset All Quota</button>';
  }
  ?>
    </div>
    <div class="sf3"></div>
  </div>
  <div class="logout">
  <button type="button">logout</button>
  </div>
  <div class="event-list">
    event-list
  </div>

</div>
</body>
</html>      
<!--<link rel="stylesheet" href="styles.css">-->
