<?php require_once('connect.php');
session_start(); 
$User_ID = $_SESSION['User_ID'];

  echo $User_ID;
				if(isset($_POST['submit'])) {
          			$title = $_POST['title'];
					$reason = $_POST['reason'];
					$s_date = $_POST['sdate'];
					$e_date = $_POST['edate'];
					$e_leave = 0;
					if(isset($_POST['emergency'])){
						$e_leave=1;
					}
						
					

					$q="INSERT INTO leaving_form(Form_Title, Form_detail,Form_DateStart, Form_DateEnd,User_ID,Form_EL) VALUES ('$title','$reason','$s_date','$e_date','$User_ID',$e_leave);";
					$result=$mysqli->query($q);
					if(!$result){
						echo "INSERT failed. Error: ".$mysqli->error ;
						return false;
					}
                    header("Location: leaving_status.php");
				}
			?>