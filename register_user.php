<!DOCTYPE html>
<html>
<head>
<title>Request leave</title>
<link rel="stylesheet" href="register.css">

<div class="container">	
    <div class="Register-Staff">
        <h1>Register-Staff</h1>
    </div>
		<div class="User-detail">
			
			<!--<form action="user.php" method="post">-->

                <!--Title-->
            <div class="title">
				<label>Title</label>
				 <select type = 'combobox' title="title" name='title'>
					<option value="Mr.">Mr.</option>
					<option value="Mrs.">Mrs.</option>
					<option value="Ms.">Ms.</option>
				</select></br>
            </div>
            
				<!--First Name-->
            <div class="firstname">
				<label>First name</label>
							
				<input type="text" name="firstname">
			</div>		

                <!--Last Name-->
				<label>Last name</label>
								
				<input type="text" name="lastname"></br><br></br>

                <!--Position-->
				<label>Position</label>
								
				<input type="text" name="position"></br>

                <!--Department-->
                <label>Department</label>
                <select type = 'combo box' title="Department" name='department'>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
				</select></br>

                <!--Gender-->
                <label>Gender</label>
                <select type = 'combo box' title="Gender" name='gender'>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select></br>
				
                <!--Birth Date-->
				<label>Birth Date</label>
				
				<input type="date" name="birth date" ></br>

                <!--Phone Number-->

                <label>Phone Number</label>
								
				<input type="text" name="phone number"></br>

                <!--Email-->
								
				<label>Email</label>
								
				<input type="text" name="email"></br>

                <!--Address-->
								
				<label>Address</label>
								
				<input type="textarea" rows="10" cols="30" name="Address"></br>
        </div>
				
                <!--------------------------------------------------------->
        <div class="Account-detail">

				<h2> Account User Profile</h2>

                <!--Status-->

                <label>Status</label>
								
				 <select type = 'combo box' title="Status" name='status'>
					<option value="Admin">Admin</option>
					<option value="HR">HR</option>
					<option value="Staff">Staff</option>
				</select></br>

                <!--Username-->
				<label>Username</label>
												
				<input type="text" name="username"></br>

                <!--Password-->
				
				<label>Password</label></br>
											
				<input type="password" name="password"></br>
															
                <!--Register button-->
				<div class="center">
								
				<input type="submit" name="submit" value ="Register">
					
        </div>	
		

	

    </div>
</html>