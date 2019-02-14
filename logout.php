<?php 
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

	<form action="login.php" method="post">

		<input class="bigbutton" type="submit" name="action" value="HOME">
		
	</form>

</body>
</html>