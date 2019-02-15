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

//send verification email to user
	if($result) {
      $to = "$email";
      $subject = "Verify your registration";
      $message = "Thanks for signing up!

Your account has been created, you can login with the following credentials after you have activated your account by clicking the link below.

------------------------
Email: '.$email.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account..
http://www.testwebsite.com/verify.php?email=$email";

      $from = "testemail@example.com";
      $headers = "From: $from";
      mail($to,$subject,$message,$headers);
    }

//send user to the success page
	header("location:success.php");
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