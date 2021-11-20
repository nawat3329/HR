<?php require_once('connect.php');
session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Request Leave Form</title>
</head>

<body>
	<div class="py-5 " style="background-color: #adc5d8;">
		<div class="container " style="background-color: white;">
			<div class="row text-center">
				<div class="col-md-12" style="background-color: #608fb7;">
					<h1 class="display-4" style="color: white;font-family: 'Segoe Print';"><img style="position: relative; left: 14px;" src="image/calendarr.png" width="50px" height="50px"> Request Leave </h1>
				</div>
			</div>
			<br>
			<div id="div_main" >
				<div id="div_content" class="form text-center" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;">
					<form action="leaving_insert.php" method="post">
						<label>Title</label>
						<input type="text" name="title" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;">
						<br><br>

						<label>Reason</label>
						<input type="text" name="reason" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;">
						<br><br>

						<label>Start Date</label>
						<input type="date" name="sdate" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;">
						<br><br>

						<label>End Date</label>
						<input type="date" name="edate" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;">
						<br><br>

						<label>Emergency Leave</label>
						<input type="checkbox" name="emergency" value="1">
						<br><br>

						<input class="btn btn-primary" style="font-family: 'Lucida Sans';font-size: 18px" type="submit" name="submitt"  value="Submit">
						<br><br>


					</form>						

				</div>					
				<a class="btn btn-dark" style="font-family: 'Lucida Sans';font-size: 18px" href=requestleave_menu.html>Back</a>
 
				<br><br>

			</div>
		</div>
	</div>



</body>

</html>