<?php
require_once('connect.php');
session_start();

?>
<header>
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</header>
<body>
<?php
if(isset($_POST['profile'])) {
    $uname = $_POST["username"];
    $pass = $_POST["userpass"];

    $q="SELECT * FROM user
        WHERE User_Username = '$uname'
        AND   User_Password = '$pass'
    ";
    $result=$mysqli->query($q);
    $count = $result->num_rows;
    if ($count ==1){        
        $row = $result->fetch_array();
        echo"fetch complete"; 
        $_SESSION['User_FName']= $row['User_FName'];
		$_SESSION['User_LName']= $row['User_LName'];
		$_SESSION['User_Position']= $row['User_Position'];
		$_SESSION['User_Department']= $row['User_Department'];
		$_SESSION['User_Gender']= $row['User_Gender'];
        $_SESSION['User_DOB']= $row['User_DOB'];
        $_SESSION['User_Tel']= $row['User_Tel'];
        $_SESSION['User_Email']= $row['User_Email'];
        $_SESSION['User_Address']= $row['User_Address'];
        $_SESSION['User_Quota']= $row['User_Quota'];
        $User_ID = $row["User_ID"];
        header('Location: user_profile.php');
}
}
?>
</body>
