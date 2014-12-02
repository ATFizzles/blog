<?php
	require_once(__DIR__ . "/database.php");

	//creates session
	session_start();
	//$path holds the string /blog/
	$path = "/blog/";

	//database info
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	//isset determines if a variable has a value
	//if statement checks if session variable has not been set, then will set it to the new database object
	if(!isset($_SESSION{"connection"})){	
		//new object
		$connection = new Database($host, $username, $password, $database);

		$_SESSION{"connection"} = $connection;
	}