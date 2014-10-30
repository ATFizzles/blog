<?php
	//connects to index
	require_once(__DIR__ . "/../model/database.php");

	//constructed mysqli object
	//helps connect to server on localhost
	//opens connection
	$connection = new mysqli($host, $username, $password);

	//checks for error
	if($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}

	//try to acces database to mysqli
	$exists = $connection->select_db($database);

	//checks if database is connected to query
	if(!$exists){
		$query = $connection->query("CREATE DATABASE $database");

		//if database is created
		if($query){
			echo "successfully created database " . $database;
		}
	}

	//if database already exists
	else {
		echo "Database already exists";
	}

	//query creates table
	//table name is posts
	//no values can be null
	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");

	//closes connection
	$connection->close();