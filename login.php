<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="default.css">
</head>
<body>

    <form action="login.php" method="post">
        <div class="imgcontainer">
          <img src="logo.jpg" alt="logo" class="logo">
        </div>
      
        <div class="container">
            <h2><label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required></h2>
      
        <h2><label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required></h2>

                <button type = "submit" class ="btn btn-primary" >Login</button>
        </div>
      
        <div class="containerlogin" style="background-color:#f1f1f1">
          <!--<button type="button" class="cancelbtn">Cancel</button>-->
    
        </div>
      </form>
</body>
</html>      
<!--<link rel="stylesheet" href="styles.css">-->

<?php session_start(); require_once('connect.php'); ?>
<?php 
	if(isset($_SESSION['login_user'])) {
		header("location: main.php");
	}
?>