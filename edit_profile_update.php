
		<?php
        require_once('connect.php'); 
		session_start();
		$uid = $_SESSION['User_ID'];
        if(isset($_POST['sum'])) {
		// Taking all 5 values from the form data(input)
		$User_FName = $_POST['User_FName'];
		$User_LName = $_POST['User_LName'];
		$User_Gender = $_POST['User_Gender'];
        $User_DOB = $_POST['User_DOB'];
        $User_Tel = $_POST['User_Tel'];
        $User_Email = $_POST['User_Email'];
        $User_Address = $_POST['User_Address'];
		$User_Password = $_POST['User_Password'];

		// Performing update query execution
		// here our table name is user

		$sql = "UPDATE user SET  User_FName = '$User_FName',User_LName = '$User_LName', User_Gender = '$User_Gender', User_DOB = '$User_DOB',
        User_Tel = '$User_Tel',User_Email = '$User_Email',User_Address = '$User_Address',User_Password='$User_Password'
		WHERE User_ID = '$uid'";
		$result1=$mysqli->query($sql);
		if(!$result1){
			echo "UPDATE failed. Error: ".$mysqli->error ;
			return false;
			}
		header("Location: user_profile.php");
		}
		
		
		?>
	
