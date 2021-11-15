<?php
        require_once('connect.php'); 
		session_start();

        if(isset($_POST['su'])) {
		// Taking all 5 values from the form data(input)
        $User_Tel = $_POST['User_Tel'];
        $User_Email = $_POST['User_Email'];
        $User_Address = $_POST['User_Address'];
		$User_ID = $row["User_ID"];

		
		// Performing update query execution
		// here our table name is user

		$sql = "UPDATE user SET  User_Tel = '$User_Tel',User_Email = '$User_Email',User_Address = '$User_Address',User_Quota = '$User_Quota',
        WHERE User_ID = '$User_ID'";
		
		$result1=$mysqli->query($sql);
		if(!$result1){
			echo "UPDATE failed. Error: ".$mysqli->error ;
			return false;
			}
		header("Location: edit_profile.php");
		}
		
		
		?>