<?php
require_once('connect.php');

$sql = "UPDATE user set User_Quota = 25;";
$result1=$mysqli->query($sql);
		if(!$result1){
			echo "INSERT failed. Error: ".$mysqli->error ;
			return false;
			}
		header("Location: main.php");
?>