<?php
require_once("connect.php");

if(isset($_POST['assign'])) {
	$User_ID = $_POST['User_ID'];	
  $Event_ID=$_POST["Event_ID"];
	$q="insert into user_has_company_event(User_ID,Event_ID) values( $User_ID,$Event_ID) "; 
	
		$result= $mysqli -> query($q);
		
		if(!$result){
			echo "Update failed. Error: ".$mysqli->error ;
			return false;
		}
  }
  if(isset($_POST['assign2'])) {
		
  $Event_ID=$_POST["Event_ID"];
	$q="update company_event set Event_Detail = 'all' where Event_ID=$Event_ID"; 
	
		$result= $mysqli -> query($q);
		
		if(!$result){
			echo "Update failed. Error: ".$mysqli->error ;
			return false;
		}
  }

  header("Location: calendar_event.php");
?>