<?php  
$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "scotchbox";

// Create connection
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);

// // make user data safe
// $clean_email = mysqli_real_escape_string($db_connection, $email);

// $clean_password = mysqli_real_escape_string($db_connection, $password);

// $clean_activation_code = mysqli_real_escape_string($db_connection, $activation_code);


// // INSERT Query
// $query = "INSERT INTO users (email, password) VALUES ('$clean_email', '$clean_password');";

// $result = mysqli_query($db_connection, $query);


// //checking the query ran ok
// if ($result){
// 	// query ran okay
// 	if (mysqli_affected_rows($db_connection) == 1){
// 		// and we changed 1 or more rows of data
// 	}else{
// 		// Uh oh, something went wrong
// 	}
// }else{
// 	// Uh oh, query didn't run! A problem with the query
// }

// //how to get id of the new row
// if (mysqli_affected_rows($db_connection) > 0){
// 	echo 'New record ID is '.mysqli_insert_id($db_connection);
// }

?>

