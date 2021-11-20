<?php require_once('connect.php'); ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <title>User quota</title>
</head>

<body>
  <div class="py-5" style="background-color: #adc5d8;">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="background-color: #608fb7;">
          <h1 class="display-4 text-center" style="color: white;font-family: 'Segoe Print';"><img style="position: relative; left: 14px;" src="image/exit.png" width="50px" height="50px"> User Quota </h1>
        </div>
      </div>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;">
              <table class="table table-bordered " style="background-color: white;">
                <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Department</th>
                    <th>Quota</th>
                    <th>Edit</th>
                  </tr>
                </thead>

                <?php
                $sql = 'SELECT User_ID,User_Username,User_Department,User_Quota FROM `user`';
                $result = $mysqli->query($sql);
                if (!$result) {
                  echo "Select failed. Error: " . $mysqli->error;
                  return false;
                }
                while ($row = $result->fetch_array()) {
                  echo "<tr>";
                  echo "<td>" . $row['User_ID'] . "</td>";
                  echo "<td>" . $row['User_Username'] . "</td>";
                  echo "<td>" . $row['User_Department'] . "</td>";
                  echo "<td>" . $row['User_Quota'] . "</td>"; ?>
                  <td><a class='btn btn-warning' style="font-family: 'Lucida Sans';font-size: 12px;position: relative; left: 12px;" href="admin_edit_profile.php?uid=<?php echo $row['User_ID'] ?>"> Edit</a></td>
                  </tr>
                <?php
                }
                ?>
              </table>
              <a class='btn btn-dark' style="font-family: 'Lucida Sans';font-size: 18px;" href='main.php'>Back</a>
              <a class='btn btn-success' style="font-family: 'Lucida Sans';font-size: 18px;position: relative; left: 912px;" href='register_user.php'>Register</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>