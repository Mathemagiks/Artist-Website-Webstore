<?php 

include 'mysqli_connect.php';

$ID = $_POST['user_id'];
$TOTAL = $_POST['total'];
$SESSID = $_POST['sessionId'];

$insertQuery = "INSERT INTO orders (user_id, sessionId, total) VALUES ('$ID', '$SESSID', '$TOTAL')";

$execute_query =  @mysqli_query ($dbc, $insertQuery);

if ($execute_query) { 

	echo ($execute_query);

} else { // If it did not run OK.
	
	echo "ERROR: there was a problem with your order!";
}

	
	// close connection
mysqli_close($dbc); // Close the database connection.
?>