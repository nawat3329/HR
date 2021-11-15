<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Approval / Denial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4">Leaving Request Approval/Deniel</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-dark">
                <tr>
                  <th>User</th>
                  <th>Title</th>
                  <th>Start</th>
                  <th>End</th>
                  <th>Detail</th>
                  <th>Approved</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $q = "select user_id,form_title,form_datestart,form_dateend,form_detail from leaving_form ";
                $result = $mysqli->query($q);
                if (!$result) {
                  echo "Select failed. Error: " . $mysqli->error;
                  return false;
                }
                while ($row = $result->fetch_array()) { ?>
                  <tr>
                    <td><?php echo $row['user_id'] ?></td>
                    <td><?php echo $row['form_title'] ?> </td>
                    <td><?php echo $row['form_datestart'] ?></td>
                    <td><?php echo $row['form_dateend'] ?></td>
                    <td><?php echo $row['form_detail'] ?></td>
                    <td><select name="approved" id="">Approved<option value="">Approved</option>
                        <option value="">Denied</option>
                      </select>
                      <a class="btn btn-primary" href="#" name="confirmApp" type="submit" action="Approved.php" method='post'>confirm</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <div class="col-md-12 text-center d-md-flex justify-content-between align-items-center">
              <ul class="nav d-flex justify-content-center">
              </ul> <a class="btn btn-primary" href="main.php">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>