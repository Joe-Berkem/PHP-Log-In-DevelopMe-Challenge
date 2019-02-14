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
?>


<!DOCTYPE html>
<html>
<head>
	<title>You Account</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h1>Welcome</h1>

	<p>User Name</p>

	<p>Email Address</p>

	<form action="login.php" method="post">

		<input class="bigbutton" type="submit" name="action" value="Log Out">
		
	</form>

</body>
</html>