<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Request Leave Form</title>
</head>

<body>

	<div id="div_main">
		<div id="div_content" class="form">
			<form action="leaving_status.php" method="post">					
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

                <label>Attach File</label>
				<input type="file" name="file">

				<input type="submit" name="sub" value="Submit">	
                <button onclick="history.go(-1);">Back </button>		
			</form>
		</div>
	</div>

</body>
</html>


