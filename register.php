<?php 
include('db_server.php');

if (!empty($_POST)) {

//the submitted login details are assigned to variables 
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$password = isset($_POST['password']) ? $_POST['password'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;

//log input to the database
	$result = registerNewUser ($email, $password, $firstname, $lastname);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h1>Register For An Account</h1>

	<form action="register.php" method="post">
		
		<div class="registernameinput">
			<div class="registerfirstnameinput">
				<label id="firstname" class="name-label">First Name*</label>
				<input class="name-input" type="text" name="firstname" placeholder="First Name">
			</div>
			<div class="registerlastnameinput">
				<label id="lastname" class="name-label">Last Name*</label>
				<input class="name-input" type="text" name="lastname" placeholder="Last Name">
			</div>
		</div>

		<label id="email">Email*</label>
		<input type="email" name="email" placeholder="Email Address">

		<label id="password">Password*</label>
		<input type="text" name="password" placeholder="Set A Password">

		<input class="bigbutton" type="submit" name="action" value="Register">
		
	</form>

</body>
</html>