<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<title>Edit user profile (Admin only)</title>
	</head>
	<body>
	<p></p>
	<nav class="navbar" style ='height:80px; background-color: dodgerblue;'>
	<span class="navbar-brand mb-0 h1">Edit user profile (Admin only)</span>
	</nav>
	<p></p>
	

	<?php 
	require_once('connect.php');
	$uid = $_GET['uid'];
	
	?>


	<form action="Admin_edit_update.php" method ='post'>
	<div class="container">
	<div class="row">
	<div class="col-sm"><h5>ID</h5></div>
	<div class="col-sm">
	<?php
	echo "<input type='text' name ='User_ID' value ='".$uid."' readonly>";
	?>
	</div>
	<div class="w-100"> </div>
	<div class="col-sm"><h5>First name</h5></div>
	<div class="col-sm"><input type="text" name="User_FName" ></div>
	<div class="col-sm"></div>
	<div class="w-100"> </div>
	<div class="col-sm"><h5>Last name</h5></div>
	<div class="col-sm"><input type="text" name="User_LName"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Position</h5></div>
	<div class="col-sm">
	<select name = "User_Position" >
	 <option value ="admin">admin</option>
	 <option value ="hr">hr</option>
	 <option value ="staff">staff</option>
	</select>
	</div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Department</h5></div>
	<div class="col-sm"><input type="text" name="User_Department"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Gender</h5></div>
	<div class="col-sm">
	<Select name="User_Gender" >
	<option value ="Male">Male</option>
	<option value ="Female">Female</option>
	<option value ="Other">Other</option>
	</select>
	</div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Birthdate</h5></div>
	<div class="col-sm"><input type="date" name="User_DOB"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>tel no.</h5></div>
	<div class="col-sm"><input type="text" name="User_Tel"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Email</h5></div>
	<div class="col-sm"><input type="text" name="User_Email"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Address</h5></div>
	<div class="col-sm"><input type="text" name="User_Address"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Quota given</h5></div>
	<div class="col-sm"><input type="text" name="User_Quota"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Username</h5></div>
	<div class="col-sm"><input type="username" name="User_Username"></div>
	<div class="col-sm"></div>
	<div class="w-100"></div>
	<div class="col-sm"><h5>Password</h5></div>
	<div class="col-sm">
	<input type="password" name="User_Password" id='input'>
	<p></p>
	<input type="checkbox" onclick="myFunction()"> Show Password
	</div>
	<div class="col-sm"></div>
</div>

	<p></p>
	<button type='submit' name='su' class ='btn-success' >Save</button>
	<p></p>
	</form>
	<a class ='btn btn-primary' href ='list_of_user.php'>Back</a>
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

	

	