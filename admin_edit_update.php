
		<?php
        require_once('connect.php'); 
        if(isset($_POST['su'])) {
		// Taking all 5 values from the form data(input)
        $uid = $_POST['User_ID'];
		$User_FName = $_POST['User_FName'];
		$User_LName = $_POST['User_LName'];
		$User_Position = $_POST['User_Position'];
		$User_Department = $_POST['User_Department'];
		$User_Gender = $_POST['User_Gender'];
        $User_DOB = $_POST['User_DOB'];
        $User_Tel = $_POST['User_Tel'];
        $User_Email = $_POST['User_Email'];
        $User_Address = $_POST['User_Address'];
        $User_Quota = $_POST['User_Quota'];
        $User_Username = $_POST['User_Username'];
        $User_Password = $_POST['User_Password'];
		// Performing update query execution
		// here our table name is user

		$sql = "UPDATE user SET  User_FName = '$User_FName',User_LName = '$User_LName',User_Position = '$User_Position', User_Department = '$User_Department', User_Gender = '$User_Gender', User_DOB = '$User_DOB',
        User_Tel = '$User_Tel',User_Email = '$User_Email',User_Address = '$User_Address',User_Quota = '$User_Quota',
        User_Username = '$User_Username',User_Password = '$User_Password' WHERE User_ID = '$uid'";
		$result1=$mysqli->query($sql);
		if(!$result1){
			echo "UPDATE failed. Error: ".$mysqli->error ;
			return false;
			}
		header("Location: list_of_user.php");
		}
		
		
		?>
	
