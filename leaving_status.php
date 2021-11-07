<?php require_once('connect.php'); ?> 
<!DOCTYPE html>
<html>

<head>
  <title>Leaving Status</title>
</head>
<body>
  <div id="div_content" class="Leaving request">
  <?php 
				if(isset($_POST['submit'])) {
          $title = $_POST['title'];
					$reason = $_POST['reason'];
					$s_date = $_POST['date_leave'];
					$e_date = $_POST['date_leave'];
					$e_leave = $_POST['emergency_leave'];
          $file = $_POST['File'];

					$q="INSERT INTO leaving form(Form_Title, Form_detail, Form_status, Form_DateStart, Form_DateEnd) VALUES ('$title','$reason','$s_date','$e_date','$e_leave','$file');";
					$result=$mysqli->query($q);
					if(!$result){
						echo "INSERT failed. Error: ".$mysqli->error ;
						return false;
					}
				}
			?>
  </div>

  <button onclick="history.go(-1);">Back </button>


</body>
</html>