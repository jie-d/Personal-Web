<?php

// Retrieve the form values in $_POST
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));

// 1. Create a database connection
	include 'db-info.php';
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if (! $connection ){
		die('Error! Can not connect.');
	}
	
	// 2. Perform database query
	$query = "INSERT INTO contact (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
	$result = mysqli_query($connection, $query);
	$NumberOfRowsAffected = mysqli_affected_rows($connection); 
	if($NumberOfRowsAffected < 1 ) {
	die('No records were written to the database. Waaaa!'); 
	}
	mysqli_close($connection);
	header("Location: database-read.php");
?>