<?php
require_once('connect.php');
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['login'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT User_FNAME, User_Position, User_ID, User_Quota from User where User_username=? AND User_password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($firstname, $user_position, $user_id, $User_Quota);
$stmt->store_result();
while ($stmt->fetch()) {
}
$_SESSION['firstname'] = $firstname;
$_SESSION['user_position'] = $user_position;
$_SESSION['User_ID'] = $user_id;
$_SESSION['User_Quota'] = $User_Quota;

// Initializing Session
header("Location: main.php"); // Redirecting To Profile Page
}
$mysqli->close(); // Closing Connection
}
?>