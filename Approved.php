<?php
require_once('connect.php');
	if(isset($_POST['confirmApp'])) {
	$User_ID = $_POST['User_ID'];
	$Form_Status= $_POST["Form_status"];	
    $Form_ID=$_POST["Form_ID"];
	$Remain = $_POST["Remain"];
    echo $Form_Status;
	$q="UPDATE LEAVING_FORM SET Form_status='$Form_Status' where Form_ID ='$Form_ID'"; 
	
		$result= $mysqli -> query($q);
		
		if(!$result){
			echo "Update failed. Error: ".$mysqli->error ;
			return false;
		}
		if($Form_Status == 'Approved'){
			$q2="UPDATE User SET User_Quota='$Remain' where User_ID ='$User_ID'"; 
		$result1= $mysqli ->query($q2);
		
		if(!$result1){
			echo "Update failed. Error: ".$mysqli->error ;
			return false;
		}
		}
	header("Location: Approval_Denial.php");	
	}
?>