<?php  
$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "scotchbox";

// Create connection
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);

// Function to register new users and send info to database
function registerNewUser ($email, $password, $firstname, $lastname) {
	global $db_connection;
	$clean_email = mysqli_real_escape_string($db_connection, $email);
	$clean_password = mysqli_real_escape_string($db_connection, $password);
	
	$query = "INSERT INTO `users` (`email`, `password`, `first name`, `last name`) VALUES ('$clean_email', '$clean_password', '$firstname', '$lastname');";
	$result = mysqli_query($db_connection, $query);
	return $result;
}

// $clean_activation_code = mysqli_real_escape_string($db_connection, $activation_code);

?>

