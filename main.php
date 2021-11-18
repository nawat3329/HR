<!--- main page after login --->
<?php
 
  session_start();
if(!isset($_SESSION["firstname"])) {
  header ("Location: login_form.php"); 
  }

  
  require('connect.php');
  $firstname = $_SESSION['firstname'];
  $user_position = $_SESSION['user_position'];
  $user_quota = $_SESSION['User_Quota'];

   
?>
<!DOCTYPE html>
<html>
<head>
<title>main page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
  $(document).ready(function() {
    var calendar = $('#calendar').fullCalendar({
      editable:false,
      header:{
        left:'prev,next today',
        center:'title',
        right:'month,agendaWeek,agendaDay'
      },
      events: 'calendar/load.php',
    });
  });
  
  
  </script>
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
    
  echo "<h3>Quota remaining:".$user_quota."<h3>";
  ?>
  </div>
  <div class="userfunc">
    <div class="request-leave">
    <a href="requestleave_menu.html"><button type="button">Request Leave</button></a>
    </div>
    <div class="edit-profile">
    <a href="user_profile.php"><button type="button">Profile</button></a>
    </div>
  </div>
  
  <!--Different button for different position-->

  <div class="specialfunc">
  
    <div class="sf1">
    <?php
    if ($user_position == "hr"){
      echo '<h3>HR</h3>';
    echo '<a href="Approval_Denial.php"><button type="button">Leaving Request</button></a>';
    echo '<a href="leaving_hr.php" class="btn btn-success">All Leaving Status </a>';
    echo '<a href="user_quota_list.php" class="btn btn-success">User Quota </a>';
    echo '<a href="calendar_event.php" class="btn btn-success">Edit Calendar </a>';
    }
    ?>
  </div>
  

    <div class="sf2">
    <?php
    if ($user_position == "admin"){
    echo '<h3>Admin</h3>';
    echo '<a href="register_user.php" class="btn btn-success">Register New Staff</a>';
    echo '<p></p>';
    echo '<a href="list_of_user.php" class="btn btn-success">List of User</a>';
    echo '<p></p>';
    echo '<a type="button" href="reset_quota.php" class="btn btn-danger">Reset All Quota</a>';
  }
  ?>
    </div>
    <div class="sf3"></div>
  </div>
  <div class="logout">
  <a type="button" href="logout.php">logout</a>
  </div>
  <div class="container">
    <div id="calendar"></div>
    
    
  </div>
  
  <div id="eventlist"></div>
</div>
</body>
</html>      
<!--<link rel="stylesheet" href="styles.css">-->
