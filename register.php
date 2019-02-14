<?php 
include('db_server.php');

// $query = "INSERT INTO users (email, password) VALUES ('$clean_email', '$clean_password');";


?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h1>Register For An Account</h1>

	<form action="login.php" method="post">
		
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

		<label id="password">Set A Password*</label>
		<input type="text" name="password" placeholder="Set A Password">

		<input class="bigbutton" type="submit" name="action" value="Register">
		
	</form>

</body>
</html>