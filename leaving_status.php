<?php require_once('connect.php'); ?> 
<!DOCTYPE html>
<html>

<head>
  <title>Leaving Status</title>
</head>
<body>
  <div id="div_content" class="Leaving request">
  <?php 
				if(isset($_POST['submit'])) {
          $title = $_POST['title'];
					$reason = $_POST['reason'];
					$s_date = $_POST['date_leave'];
					$e_date = $_POST['date_leave'];
					$e_leave = $_POST['emergency_leave'];
          $file = $_POST['file'];

					$q="INSERT INTO leaving form(Form_Title, Form_detail, Form_status, Form_DateStart, Form_DateEnd) VALUES ('$title','$reason','$s_date','$e_date','$e_leave','$file');";
					$result=$mysqli->query($q);
					if(!$result){
						echo "INSERT failed. Error: ".$mysqli->error ;
						return false;
					}
				}
			?>

<table>
                <col width="15%">
                <col width="30%">
                <col width="30%">
                <col width="20%">
                <col width="5%">

                <tr>
                    <th>Title</th> 
                    <th>Reason</th>
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Emergency Leave</th>
                    <th>Attach File</th>
                </tr>
 		 <?php 
				 	$q="select * from leaving form inner join user on leaving form.user_id = user.user_id";
					$result=$mysqli->query($q);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					}
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    <td><?=$row['title']?></td> 
                    <td><?=$row['date_leave']?></td>
                    <td><?=$row['date_leave']?></td>
                    <td><?=$row['emergency_leave']?></td>
					<td>
            ?>
					<?php 
					if ($row['emergency_leave']==1)
					    echo "<input type='checkbox' CHECKED >";
					else 
					    echo "<input type='checkbox' disabled >";
					} ?>

			<?php $count=$result->num_rows;
					echo "<tr><td colspan=7 align=right>Total $count records</td></tr>";
					$result->free();
			?>
            </table>
  </div>

  

  <button onclick="history.go(-1);">Back </button>


</body>
</html>