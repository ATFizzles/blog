<?php
	//connects to database.php file
	require_once(__DIR__ . "/..model/database.php");

	//created new mysqli object
	//created connection to the database
	//stored connection within connection variable 
	$connection = new mysqli($host, $username, $password, $database);
	//recieves input, stores input, and later echoes INPUT_POST
	//saving input in filter variables
	//helps secure database
	//sanitizing by making sure it is a string
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";

	//closes connection
	$connection->close();