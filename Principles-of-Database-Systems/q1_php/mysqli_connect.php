<?php
	// Defined as constants so that they can't be changed
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'hw3_ex1');

	// $dbc will contain a resource link to the database
	// @ keeps the error from showing in the browser

	$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .
	mysqli_connect_error());

	// // Connect to server and select databse.
	// mysql_connect("$host", "$username", "$password")OR die("cannot connect"); 
	// mysql_select_db("$db_name")OR die("cannot select DB");	
?>