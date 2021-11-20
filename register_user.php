<?php require_once('connect.php'); ?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
	<title>Register user</title>
</head>

<body>
	<div class="py-5 " style="background-color: #c5e1e4;">
		<div class="container " style="background-color: white;">
			<div class="row text-center">
				<div class="col-md-12" style="background-color: #fbdd9d;">
					<h1 class="display-4" style="color: white;font-family: 'Segoe Print';"><img style="position: relative; left: 14px;" src="image/register.png" width="50px" height="50px"> Register Staff </h1>
				</div>
			</div>
			<br>
			<form action="register_insert.php" method='post'>
				<div id="div_content" class="form" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 14px;">
					<label style="position: relative; left: 14px;">First name</label>
					<input type="text" name="Fname" id='name' style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 21px;">
					<br>

					<label style="position: relative; left: 14px;">Last name</label>
					<input type="text" name="Lname" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 23px;">
					<br>

					<label style="position: relative; left: 14px;">Position</label>
					<select name="Position" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 44px;">
						<option value="admin">admin</option>
						<option value="hr">hr</option>
						<option value="staff">staff</option>
					</select>
					<br>

					<label style="position: relative; left: 14px;">Department</label>
					<input type="text" name="Department" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 14px;">
					<br>

					<label style="position: relative; left: 14px;">Gender</label>
					<Select name="Gender" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 51px;">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Other">Other</option>
					</select>
					<br>

					<label style="position: relative; left: 14px;">Birthdate</label>
					<input type="date" name="DOB" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 34px;">
					<br>

					<label style="position: relative; left: 14px;">tel no.</label>
					<input type="text" name="Tel" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 60px;">
					<br>

					<label style="position: relative; left: 14px;">Email</label>
					<input type="text" name="Email" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 64px;">
					<br>

					<label style="position: relative; left: 14px;">Address</label>
					<input type="text" name="Address" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 43px;">
					<br>

					<label style="position: relative; left: 14px;">Quota given</label>
					<input type="text" name="Quota" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 15px;">
					<br>

					<label style="position: relative; left: 14px;">Username</label>
					<input type="username" name="Username" style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 27px;">
					<br>

					<label style="position: relative; left: 14px;">Password</label>
					<input type="password" name="Password" id='input' style="color: #0c4876;font-family: 'Bahnschrift';font-size:18px;position: relative; left: 30px;">
					<input type="checkbox" style="position: relative; left: 30px;" onclick="myFunction()"> <label style="position: relative; left: 30px;">Show Password</label>

					<button class="btn btn-success" style="font-family: 'Lucida Sans';font-size: 18px;position: relative; left: 30px;" type='submit' name='submit' value='Submit'>Register</button>

				</div>

			</form>
			<br>

			<a class='btn btn-dark' style="font-family: 'Lucida Sans';font-size: 18px;position: relative; left: 30px;" href='main.php'>Back</a>

			<script>
				function myFunction() {
					var x = document.getElementById("input");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<br><br>

		</div>
	</div>

</body>

</html>