<?php require_once('connect.php');
session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Request Leave Form</title>
</head>

<body>

	<div id="div_main">
		<div id="div_content" class="form">
			<form action="leaving_insert.php" method="post">					
				<label>Title</label>
				<input type="text" name="title">
						
				<label>Reason</label>
				<input type="text" name="reason">

                <label>Start Date</label>
				<input type="date" name="sdate">

                <label>End Date</label>
				<input type="date" name="edate">

				<label>Emergency Leave</label>
				<input type="checkbox" name="emergency" value="1">


				<input type="submit" name="submit" value="Submit">	
                <a href= requestleave_menu.html><button >Back </button></a>		
			</form>
		</div>
	</div>

</body>
</html>


