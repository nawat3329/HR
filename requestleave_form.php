<?php require_once('connect.php');
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Request Leave Form</title>
</head>

<body>

	<div id="div_main">
		<div id="div_content" class="form">
			<form action="leaving_insert.php" method="post">					
				<label>Title</label>
				<input type="text" name="title">
						
				<label>Reason</label>
				<input type="text" name="reason">

                <label>Start Date</label>
				<input type="date" name="sdate">

                <label>End Date</label>
				<input type="date" name="edate">

				<label>Emergency Leave</label>
				<input type="checkbox" name="emergency" value="1">


				<input type="submit" name="submitt" value="Submit">	
                <a class="btn btn-primary" href= requestleave_menu.html>Back</a>		
			</form>
		</div>
	</div>

</body>
</html>


