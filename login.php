<?php 
session_start();
 
if (!isset($_SESSION['count']))
{
  $_SESSION['count'] = 1;
  echo $_SESSION['count'];

}
else
{
  ++$_SESSION['count'];
}
 



include('db_server.php');

// initialize session variables
// $_SESSION['logged_in_user_id'] = '1';

// // access session variables
// echo $_SESSION['logged_in_user_id'];

$knownemail = "root@root.com";
$knownpassword = "root";
$loggedin = false;

if (!empty($_POST)) {

	if (($_POST['email'] === $knownemail) && ($_POST['password'] === $knownpassword)) {
		$loggedin = true; 
		header("location:account.php");
		die();
	} else {
		header("location:noaccount.php");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<button class="signupbutton">Sign Up</button>
		<button class="loginbutton1">Log In</button>
	</header>

	<form action="login.php" method="post">

		<label id="email">Email*</label>
		<input type="email" name="email" placeholder="Email Address">

		<label id="password">Password*</label>
		<input type="text" name="password" placeholder="Enter Password">

		<p><a href="forgot.php">Forgot Password</a></p>

		<input class="bigbutton" type="submit" name="action" value="Log In">
		
	</form>

</body>
</html>