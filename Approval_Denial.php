<?php require_once('connect.php');
?>
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
  <div  style="background-color: #adc5d8;">
  <div class="py-5" style="background-color: #adc5d8;">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="background-color: #608fb7;">
          <h1 class="display-4 text-center" style="color: white;font-family: 'Segoe Print';"><img style="position: relative; left: 14px;" src="image/stamp.png" width="50px" height="50px"> Leaving Request Approval/Deniel </h1>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;">
            <table class="table table-bordered " style="background-color: white;">
              <thead class="thead-dark">
                <tr>
                  <th>FormID</th>
                  <th>User</th>
                  <th>User Quota</th>
                  <th>Title</th>
                  <th>Start</th>
                  <th>End</th>
                  <th>Total Quota Use</th>
                  <th>Remaining Quota</th>
                  <th>Detail</th>
                  <th>Approved</th>
                </tr>
              </thead>
              <tbody style="color: #0c4876;font-family: 'Bahnschrift';font-size:16px;">
                <?php
                $q = "select Form_ID,user.User_ID,user.User_Quota,Form_Title,Form_DateStart,Form_DateEnd,Form_detail,Form_status from leaving_form inner join user on leaving_form.user_id= user.User_id WHERE Form_status IS NULL ";
                $result = $mysqli->query($q);
                if (!$result) {
                  echo "Select failed. Error: " . $mysqli->error;
                  return false;
                }



                while ($row = $result->fetch_array()) {
                  $date1 = new DateTime($row['Form_DateStart']);
                  $date2 = new DateTime($row['Form_DateEnd']);
                  $diff = date_diff($date2, $date1);
                  $remain = $row['User_Quota'] - $diff->format('%a');
                ?>

                  <tr>
                    <td><?php echo $row['Form_ID'] ?></td>
                    <td><?php echo $row['User_ID'] ?></td>
                    <td><?php echo $row['User_Quota'] ?></td>
                    <td><?php echo $row['Form_Title'] ?> </td>
                    <td><?php echo $row['Form_DateStart'] ?></td>
                    <td><?php echo $row['Form_DateEnd'] ?></td>
                    <td><?php echo $diff->format('%a') ?></td>
                    <td><?php echo $remain ?></td>
                    <td><?php echo $row['Form_detail'] ?></td>
                    <form action='Approved.php' method='post'>
                      <td>

                        <?php
                        echo "<input type='hidden' name='User_ID' value=" . $row['User_ID'] . ">";
                        echo "<input type='hidden' name='Form_ID' value=" . $row['Form_ID'] . ">";
                        echo "<input type='hidden' name='Remain' value=" . $remain . ">";
                        ?>
                        <select name="Form_status">
                          <option value="Approved">Approved</option>
                          <option value="Denied">Denied</option>
                        </select>
                        <button class="btn btn-warning" name="confirmApp" style="font-family: 'Lucida Sans';font-size: 12px;" type="submit">confirm</button>
                    </form>
                    </td>
                  </tr>
                <?php
                } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="py-4">
          <div class="container">
            <div class="row">
              <div>
                <a class="btn btn-dark" style="font-family: 'Lucida Sans';font-size: 18px;position: relative; left: 30px;" href="main.php">Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>