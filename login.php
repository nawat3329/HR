
<?php
require_once('connect.php');
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['login'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
echo 'lungtoo';
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT User_username, User_password from User where User_username=? AND User_password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $username; // Initializing Session
echo 'prayut';
header("Location: main.php"); // Redirecting To Profile Page
}
$mysqli->close(); // Closing Connection
}
?>