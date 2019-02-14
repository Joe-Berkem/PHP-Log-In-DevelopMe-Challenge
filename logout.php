<?php 
// when the user arrives on the logout page their session details are resset and are logged out!
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log Out</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h1>Thanks for stopping by</h1>

	<p>You've been successfully logged out</p>

	<a href="login.php"><button class="bigbutton" type="submit" name="action" value="HOME">HOME</button></a>
		
</body>
</html>