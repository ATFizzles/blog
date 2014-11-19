<?php
	//connects to database.php file
	require_once(__DIR__ . "/../model/config.php");

	//recieves input, stores input, and later echoes INPUT_POST
	//saving input in filter variables
	//helps secure database
	//sanitizing by making sure it is a string
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	
	//query is a method
	//INSERT INTO adds info into the specific tables
	//INSERT INTO is an action
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

	//if query is successful it outputs the echo
	if ($query) {
		echo "<p>Successfully inserted post: $title</p>";
	}
	//if query wasn't successful it outputs this echo
	else{
		echo "<p>$connection->error</p>";
	}