<?php require_once('connect.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<title>Register user</title>
	</head>
	<body>
	<p></p>
	<nav class="navbar" style ='height:80px; background-color: dodgerblue;'>
	<span class="navbar-brand mb-0 h1">Register user</span>
	</nav>
	<p></p>
	<form action ="register_insert.php" method='post'>
	<div class="container">
	<div class="row">
	<div class="col-sm"><h5>First name</h5></div>
	<div class="col-sm"><input type="text" name="Fname" id='name'></div>
	<div class="col-sm"></div>
	<div class="w-100"> </div>
	<div class="col-sm"><h5>Last name</h5></div>
	<div class="col-sm"><input type="text" name="Lname"></div>
	<div class="col-sm"></div>
	<div class="w-100"> </div>
	<div class="col-sm"><h5>Position</h5></div>
	<div class="col-sm"><input type="text" name="Position"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Department</h5></div>
	<div class="col-sm"><input type="text" name="Department"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Gender</h5></div>
	<div class="col-sm"><input type="text" name="Gender" ></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Birthdate</h5></div>
	<div class="col-sm"><input type="date" name="DOB"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>tel no.</h5></div>
	<div class="col-sm"><input type="text" name="Tel"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Email</h5></div>
	<div class="col-sm"><input type="text" name="Email"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Address</h5></div>
	<div class="col-sm"><input type="text" name="Address"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Quota given</h5></div>
	<div class="col-sm"><input type="text" name="Quota"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Username</h5></div>
	<div class="col-sm"><input type="username" name="Username"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Password</h5></div>
	<div class="col-sm">
	<input type="password" name="Password" id='input'>
	<p></p>
	<input type="checkbox" onclick="myFunction()"> Show Password
	</div>
	<div class="col-sm"></div>
</div>
	<p></p>
	<button type='submit' name='submit' value = 'Submit'>Register</button>
	<p></p>
	</form>
	<a class ='btn btn-primary' href ='main.php'>Back</a>
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
	</body>
	</html>
