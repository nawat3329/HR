<?php
$mysqli = new mysqli('localhost','root','','hr_1');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
 ?>

