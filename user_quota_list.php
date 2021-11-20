<?php require_once('connect.php'); ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <title>User quota</title>
</head>

<body>
  <div class="py-5" style="background-color: #447270;">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="background-color: #b7c098;">
          <h1 class="display-4 text-center" style="color: black;font-family: 'Segoe Print';"><img style="position: relative; left: 14px;" src="image/list.png" width="50px" height="50px"> User quota </h1>
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
                  </tr>
                </thead>

                <?php
                $sql = 'SELECT User_ID,User_Username,User_Department,User_Quota FROM `user`';
                $result = $mysqli->query($sql);
                if (!$result) {
                  echo "Select failed. Error: " . $mysqli->error;
                  return false;
                }
                while ($row = $result->fetch_array()) { ?>
                  <tr>
                    <td><?= $row['User_ID'] ?></td>
                    <td><?= $row['User_Username'] ?></td>
                    <td><?= $row['User_Department'] ?></td>
                    <td><?= $row['User_Quota'] ?></td>
                  </tr>
                <?php } ?>
              </table>
              <a class="btn btn-dark" style="color:white;font-family: 'Lucida Sans';font-size: 16px;" href='main.php'>Back</a>
            </div>
</body>

</html>