<?php
require_once('connect.php');
	if(isset($_POST['confirmApp'])) {
	$Form_Status= $_POST["Form_Status"];	
    $Form_ID=$_POST["Form_ID"];
    
	$q="UPDATE LEAVING_FORM SET Form_Status='$Form_Status' where Form_ID ='Form_ID'"; 
		
		$result=$mysqli->query($q);
		if(!$result){
			echo "Update failed. Error: ".$mysqli->error ;
			return false;
		}
	header("Location: Approval_Denial.php");	
	}
?>