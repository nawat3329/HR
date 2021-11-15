<?php require_once('connect.php');
session_start(); 
$User_ID = $_SESSION['User_ID'];
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Leaving Status</title>
</head>
<body>
  <div id="div_content" class="Leaving request">

<table>
                <col width="15%">
                <col width="30%">
                <col width="30%">
                <col width="25%">

                <tr>
                    <th>Title</th> 
                    <th>Reason</th>
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Emergency Leave</th>  
                </tr>
 		 <?php 
				 	$q="select * from leaving_form inner join user on leaving_form.user_id = user.user_id";
					$result=$mysqli->query($q);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					}
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    <td><?=$row['Form_Title']?></td> 
					<td><?=$row['Form_detail']?></td>
                    <td><?=$row['Form_DateStart']?></td>
                    <td><?=$row['Form_DateEnd']?></td>
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

  

  <a href= "requestleave_menu.html"><button >Back </button></a>


</body>
</html>