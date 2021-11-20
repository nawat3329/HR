<?php
require_once("connect.php");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Calendar and Event</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
    $(document).ready(function() {
      var calendar = $('#calendar').fullCalendar({
        editable: true,
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        events: 'calendar/load.php',
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
          var title = prompt("Enter Event Title");
          if (title) {
            var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
            $.ajax({
              url: "calendar/insert.php",
              type: "POST",
              data: {
                title: title,
                start: start,
                end: end
              },
              success: function() {
                calendar.fullCalendar('refetchEvents');
                alert("Added Successfully");
              }
            })
          }
        },
        editable: true,
        eventResize: function(event) {
          var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
          var title = event.title;
          var id = event.id;
          $.ajax({
            url: "calendar/update.php",
            type: "POST",
            data: {
              title: title,
              start: start,
              end: end,
              id: id
            },
            success: function() {
              calendar.fullCalendar('refetchEvents');
              alert('Event Update');
            }
          })
        },

        eventDrop: function(event) {
          var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
          var title = event.title;
          var id = event.id;
          $.ajax({
            url: "calendar/update.php",
            type: "POST",
            data: {
              title: title,
              start: start,
              end: end,
              id: id
            },
            success: function() {
              calendar.fullCalendar('refetchEvents');
              alert("Event Updated");
            }
          });
        },

        eventClick: function(event) {
          if (confirm("Are you sure you want to remove it?")) {
            var id = event.id;
            $.ajax({
              url: "calendar/delete.php",
              type: "POST",
              data: {
                id: id
              },
              success: function() {
                calendar.fullCalendar('refetchEvents');
                alert("Event Removed");
              }
            })
          }
        },

      });
    });
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <div class="py-5" style="background-color: #fbdd9d;">
  <div class="container">
      <div class="row">
        <div class="col-md-12" style="background-color: #f4f2dd;">
          <h1 class="display-4 text-center" style="color: black;font-family: 'Segoe Print';"><img style="position: relative; left: 14px;" src="image/event.png" width="50px" height="50px"> Calendar and Event </h1>
        </div>
      </div>
      <br>
  <div class="container" style="background-color:#b7c098;font-family: 'Bahnschrift';color:925f17;">
    <div id="calendar"></div>
  </div>
  <?php
  $qe = "SELECT Event_ID, Event_Name FROM company_event ";

  $result = $mysqli->query($qe);
  while ($row = $result->fetch_array()) {
    $event_id = $row['Event_ID'];
    $event_name = $row['Event_Name'];
  }
  ?>

<!-- Table User Event -->
<div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;">
              <table class="table table-bordered " style="background-color: white;">
                <thead class="thead-dark">
            <tr>
              <th>Event Name</th>
              <th>Participant</th>
              <th>Assign</th>
            </tr>
          </thead>
          <tbody>
            <td>
              <select name="Event_ID">Event List
                <?php
                $q = 'select Event_ID,Event_Name from company_event';
                if ($result = $mysqli->query($q)) {
                  while ($row = $result->fetch_array()) {
                    echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
                  }
                } else {
                  echo 'Query error: ' . $mysqli->error;
                }
                ?>
              </select>
            </td>
            <td>
              <select name="User_ID">User List
                <?php
                $q = 'select User_ID,User_FName,User_Position,User_Department from user';
                if ($result = $mysqli->query($q)) {
                  while ($row = $result->fetch_array()) {
                    echo '<option value="' . $row[0] . '">' . $row[0] . ' ' . $row[1] . ' ' . $row[2] . ' ' . $row[3] . '</option>';
                  }
                } else {
                  echo 'Query error: ' . $mysqli->error;
                }
                ?>
              </select>

              <td>
          <?php
              echo "<input class='btn btn-success' style='color:white;font-family: \'Lucida Sans\';font-size: 14px;' type='submit' name ='assign' value ='submit'>";
          ?>
        </td>

              </form>

          </tbody>

        </table>
    
      </div>
    </div>
  </div>

  <!-- Table assignDepartment event -->
  <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;">
              <table class="table table-bordered " style="background-color: white;">
                <thead class="thead-dark">
            <tr>
              <th>Event Name</th>
              <th>All</th>
            </tr>
          </thead>
          <tbody>
            <td>
              <select name="Event_ID">Event List
                <?php
                $q = 'select Event_ID,Event_Name from company_event';
                if ($result = $mysqli->query($q)) {
                  while ($row = $result->fetch_array()) {
                    echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
                  }
                } else {
                  echo 'Query error: ' . $mysqli->error;
                }
                ?>
              </select>
            </td>              

          <td>
            <?php
              echo "<input class='btn btn-secondary' style='color:white;font-family: \'Lucida Sans\';font-size: 14px;' type='submit' name ='assign2' value ='Assign to All'>";
            ?>
          </td>

              </form>

          </tbody>

        </table>
    
      </div>
    </div>
  </div>



  <a  class="btn btn-dark" style="color:white;font-family: 'Lucida Sans';font-size: 16px;" href ="main.php">Back</a>



</body>
</html>