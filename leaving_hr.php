<?php require_once('connect.php');
session_start(); 
$User_ID = $_SESSION['User_ID'];

?> 
<!DOCTYPE html>
<html>
<head>
  <title>All Leaving status</title>
</head>
<body>
  <div id="div_content" class="Leaving request">

<table>
                <col width="10%">
                <col width="20%">
                <col width="20%">
                <col width="20%">
                <col width="20%">
                <col width="10%">

                <tr>
                    <th>User_ID</th>
                    <th>Title</th> 
                    <th>Reason</th>
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Status</th>  
                    <th>Quota Remaining</th>
                    <th>Emergency Leave</th>
                </tr>
 		 <?php 
          
				 	$q="select * from leaving_form inner join user on leaving_form.user_id = user.user_id ";
          
          
					$result=$mysqli->query($q); 
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					}
				 while($row=$result->fetch_array()){ ?>
                    <?php if(!isset($row['Form_status'])){
                      $row['Form_status'] = "Waiting";
                    } ?>
                 <tr> 
                    <td><?=$row['User_ID']?></td>
                    <td><?=$row['Form_Title']?></td> 
					          <td><?=$row['Form_detail']?></td>
                    <td><?=$row['Form_DateStart']?></td>
                    <td><?=$row['Form_DateEnd']?></td>
                    <td><?=$row['Form_status']?></td>
                    <td><?=$row['User_Quota']?></td>
                    
                    
					<td>
            
					<?php 
					if ($row['Form_EL']==1)
					    echo "<input type='checkbox' CHECKED  disabled>";
					else 
					    echo "<input type='checkbox' disabled >";
					} ?>

			<?php $count=$result->num_rows;
					echo "<tr><td colspan=7 align=right>Total $count records</td></tr>";
					$result->free();
			?>
            </table>
  </div>

  

  <a href= "main.php"><button >Back </button></a>


</body>
</html>