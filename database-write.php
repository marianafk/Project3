<?php
	//1. Retrieve information from the form in html-form.html file
	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$phone = Trim(stripslashes($_POST['phone']));
	$message = Trim(stripslashes($_POST['message']));

	//2. Create a database connection - check for errors
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$dbhost = "localhost";
	$dbuser = "urcscon3_mflores";
	$dbpass = "coffee1N/!";
	$dbname = "urcscon3_mfloresk";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	//4. Write query to insert info into the database
	$query = "INSERT INTO contact_form(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

	//5. Send query to the database
	$result = mysqli_query($connection, $query);

	//6. Make sure that the query did something to the data
	$NumberOfRowsAffected = mysqli_affected_rows($connection);

	if($NumberOfRowsAffected < 1 ) {
 		die('We were not able to add the info to the database. Sorry!');
		} 

	//7. Close the connection
	mysqli_close($connection);

	//8. Redirect user to the database-read.php file
	header("Location: database-read.php");
?>