
<?php
session_start(); // Starting Session
require_once("database.php");
// $error=''; // Variable To Store Error Message
// 	if (isset($_POST['submit'])) {
// 		if (empty($_POST['username']) || empty($_POST['password'])) {
// 		$error = "Username or Password is invalid";
// 	}
// else
// 	{
	// Define $username and $password
	// $username=$_POST['username'];
	// $password=$_POST['password'];
	$username = "admin";
	$password = "admin";

	// To protect MySQL injection for Security purpose
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	// SQL query to fetch information of registerd users and finds user match.
	$sql = "select * from login where password='$password' AND username='$username'";
	$rows = $dbh->quary($sql);
	print_r($rows);
	if ($rows == 1) {
		$_SESSION['login_user']=$username; // Initializing Session
		echo "test";
		header("location: index.php");
		} else {
			$error = "Username or Password is invalid";
			}
			mysql_close($connection); // foute login gegevens
		/*}*/
	// }
?>