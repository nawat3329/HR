<?php require_once('connect.php'); ?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User quota</title>
  </head>
  <body>
  <p></p>
	<nav class="navbar" style ='height:80px; background-color: dodgerblue;'>
	<span class="navbar-brand mb-0 h1">User quota</span>
	</nav>
	<p></p>
  </body>
</html>
<div class="mx-auto" >
<table class="table table-striped">
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
          $result=$mysqli->query($sql);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					}
          while($row=$result->fetch_array()){ ?>
            <tr>
                <td><?=$row['User_ID']?></td> 
                <td><?=$row['User_Username']?></td>
                <td><?=$row['User_Department']?></td>
                <td><?=$row['User_Quota']?></td>
            </tr>
            <?php } ?>
            </table>
            <a class ='btn btn-primary' href ='main.php'>Back</a>
            </div>

         