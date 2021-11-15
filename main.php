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
  ?>
  <h3>Quota remaining:<h3>
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
    echo '<button type="button">Leaving Request</button>';
    echo '<button type="button">User Quota</button>';
    echo '<a href="calendar_event.php" class="btn btn-success">Edit Calendar </a>';
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
  <div class="container">
    <div id="calendar"></div>
    
    
  </div>
  <div id="eventlist"></div>
</div>
</body>
</html>      
<!--<link rel="stylesheet" href="styles.css">-->
