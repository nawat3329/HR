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
                  <th>FormID</th>
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
                $q = "select Form_ID,User_ID,Form_Title,Form_DateStart,Form_DateEnd,Form_detail,Form_status from leaving_form WHERE Form_status IS NULL ";
                $result = $mysqli->query($q);
                if (!$result) {
                  echo "Select failed. Error: " . $mysqli->error;
                  return false;
                }
                while ($row = $result->fetch_array()) { 
                  
                  ?>
                
                  <tr>
                    <td><?php echo $row['Form_ID'] ?></td>
                    <td><?php echo $row['User_ID'] ?></td>
                    <td><?php echo $row['Form_Title'] ?> </td>
                    <td><?php echo $row['Form_DateStart'] ?></td>
                    <td><?php echo $row['Form_DateEnd'] ?></td>
                    <td><?php echo $row['Form_detail'] ?></td>
                    <form action = 'Approved.php' method = 'post'>
                    <td>
                     
                    <?php   
                    echo "<input type='hidden' name='Form_ID' value=".$row['Form_ID'].">";
                    ?>
                    <select name="Form_status">
                    <option value="Approved">Approved</option>
                        <option value="Denied">Denied</option>                
                      </select>
                      <button class="btn btn-primary" name="confirmApp" type="submit">confirm</button>
                      </form>
                    </td>
                  </tr>
                <?php 
                } ?>
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