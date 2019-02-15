<?php 
session_start();
include('db_server.php');

// if the user is already logged in
if (isset($_SESSION['logged-in']) && $_SESSION['logged-in']) {
	$loggedin = true; 
 	include 'account.php';
 	die();
} 

// if the login form is submitted
if (!empty($_POST)) {

//the submitted login details are assigned to variables 
	$password = isset($_POST['password']) ? $_POST['password'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;

// the email address is checked against the database
	$emailquery = "SELECT * FROM `users` WHERE `email` = '$email';";
	
	$rowresult = mysqli_query($db_connection, $emailquery);

	if (mysqli_num_rows($rowresult) > 0){
		while($row = mysqli_fetch_assoc($rowresult)){

// the login details in the selected row are checked against those submitted	
//if the login form is submitted with details that match our data they are directed to the account page and logged in!
			if (($row['email'] === $email) && ($row['password'] === $password)) {
			$loggedin = true; 
			$_SESSION['logged-in'] = true;
			header("location:account.php");
			}
//if they enter the login form some incorrect details they are shown the noaccount or error message
			else {
				include 'noaccount.php';
			}		
		} 
//if they enter no correct details they are shown the noaccount or error message
	} else {
		include 'noaccount.php';
		}
}

// if they have arrived on the page, are not logged in and haven't submitted the form this is what they will see
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<a href="register.php"><button class="signupbutton">Sign Up</button></a>
		<button type="submit" name="action" value="Log In" class="loginbutton1">Log In</button>
	</header>

	<form action="login.php" method="post">

		<label id="email">Email*</label>
		<input type="email" name="email" placeholder="Email Address">

		<label id="password">Password*</label>
		<input type="text" name="password" placeholder="Enter Password">

		<!-- <input class="rememberinput" type="checkbox" name="remember" id="remember" value="1">
		<label class="rememberlabel" for="remember">Remember Me</label> -->

		<p class="forgot-password"><a href="forgot.php">Forgot Password</a></p>

		<input class="bigbutton" type="submit" name="action" value="Log In">
		
	</form>

</body>
</html>