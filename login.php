<!DOCTYPE html>
<html>
<head>
	<title>Secret Site Log In</title>
</head>
<body>

<?php 

$knownemail = "root@root.com";
$knownpassword = "root";
$loggedin = false;

function printloginerror(){
	echo "<p>Whoops, it doesn't look like you have an account with SS. Please register</p>";
}

function printloggedin(){
	echo "<p>Logged in to your secret site</p>";
}

?>

	<h1>Secret Site Log In</h1>

<?php 

if (!empty($_POST)) {

	if (($_POST['email'] === $knownemail) && ($_POST['password'] === $knownpassword)) {
		$loggedin = true; 
		printloggedin();
		die();
	} else {
		printloginerror();
	}
}

?>
	<form action="login.php" method="post">

		<label id="email">Email</label>
		<input type="email" name="email">

		<label id="password">password</label>
		<input type="text" name="password">

		<input type="submit" name="action" value="Log In">
		
	</form>

</body>
</html>