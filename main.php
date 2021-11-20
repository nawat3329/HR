<!--- main page after login --->
<?php

session_start();
if (!isset($_SESSION["firstname"])) {
  header("Location: login_form.php");
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
        editable: false,
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        events: 'calendar/load.php',
      });
    });
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <div class="py-5 text-center" style="background-color:#f6e271">
    <div class="container" style="background-color: #f0f7ff;">
      <div class="row">
        <div class="col-md-12" style="background-color: #447270;">
          <h2 class="display-4 text-center"><img src="image/logo.jpg" width="120px" height="60px"></h2>
        </div>
      </div>
      <br>


      <!--<div class="Calendar">
    <img src="calendar.png" alt="calendar" class="calendar">
  </div>-->
      <div class="Name">
        <?php
        echo '<h3 style="color: #0c4876;font-family: \'Bahnschrift\';font-size: 36px">Name: ' . $firstname . '<h3>';

        echo '<h3 style="color: #925f17;font-family: \'Bahnschrift\';font-size: 28px">Quota remaining: ' . $user_quota . '<h3>';
        ?>
      </div>
      <br>

      <div class="userfunc" style="position: relative; bottom: 15px;">
        <div>
          <a href="requestleave_menu.html"><button class="btn btn-primary" type="button" style="color:white;font-family: 'Lucida Sans';font-size: 16px;position: relative; right: 25px;">Request Leave</button></a>
          <a href="user_profile.php"><button class="btn btn-primary" type="button" style="color:white;font-family: 'Lucida Sans';font-size: 16px;">Profile</button></a>
          <a class="btn btn-dark" style="font-family: 'Lucida Sans';font-size: 18px;position: relative; left: 25px;" type="button" href="logout.php">logout</a>
        </div>
      </div>

      <!--Different button for different position-->

      <div class="specialfunc ">

        <div class="sf1">
          <?php
          if ($user_position == "hr") {
            echo '<h3 style="color: #4f4e28;font-family: \'Bahnschrift\';font-size: 30px;position: relative; bottom: -5px;">HR</h3>';
            echo '<a href="Approval_Denial.php" class="btn btn-success" style="font-family: \'Lucida Sans\';font-size: 18px;position: relative; right: 40px;">Leaving Request</button></a>';
            echo '<a href="leaving_hr.php" class="btn btn-success" style="font-family: \'Lucida Sans\';font-size: 18px;">All Leaving Status </a>';
            echo '<a href="user_quota_list.php" class="btn btn-success" style="font-family: \'Lucida Sans\';font-size: 18px;position: relative; left: 40px;">User Quota </a>';
            echo '<a href="calendar_event.php" class="btn btn-success" style="font-family: \'Lucida Sans\';font-size: 18px;position: relative; left: 80px;">Edit Calendar </a>';
          }
          ?>
        </div>


        <div class="sf2">
          <?php
          if ($user_position == "admin") {
            echo '<h3 style="color: #4f4e28;font-family: \'Bahnschrift\';font-size: 30px;position: relative; bottom: -5px;">Admin</h3>';
            echo '<a href="register_user.php" class="btn btn-secondary" style="font-family: \'Lucida Sans\';font-size: 18px;position: relative; right: 35px;">Register New Staff</a>';
            echo '<a href="list_of_user.php" class="btn btn-secondary" style="font-family: \'Lucida Sans\';font-size: 18px;">List of User</a>';
            echo '<a type="button" href="reset_quota.php" class="btn btn-danger" style="font-family: \'Lucida Sans\';font-size: 18px;position: relative; left: 35px;">Reset All Quota</a>';
          }
          ?>
        </div>
        <div class="sf3"></div>
      </div>
      <div class="container" style="background-color:#b7c098;font-family: 'Bahnschrift';">
        <div id="calendar"></div>


      </div>

      <div id="eventlist"></div>
    </div>
  </div>
</body>

</html>
<!--<link rel="stylesheet" href="styles.css">-->