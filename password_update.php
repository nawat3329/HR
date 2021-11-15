<?php
require_once('connect.php');
session_start();

if(isset($_POST['chpass'])){
        $User_Password = $_POST['User_Password'];
        $User_ID= $row['User_ID'];

        $sql = "UPDATE user SET  User_Password = '$User_Password'
        WHERE User_ID = '$User_ID'";
        $result1=$mysqli->query($sql);
		if(!$result1){
			echo "INSERT failed. Error: ".$mysqli->error ;
			return false;
			}
		header("Location: bookappointment.php");
}


?>