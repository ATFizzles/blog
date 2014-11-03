<?php
	//connects to index
	require_once(__DIR__ . "/../model/database.php");

	//constructed mysqli object
	//helps connect to server on localhost
	//opens connection
	$connection = new mysqli($host, $username, $password);

	//checks for error
	if($connection->connect_error) {
		die("<p>Error: " . $connection->connect_error . "</p>");
	}

	//try to acces database to mysqli
	$exists = $connection->select_db($database);

	//checks if database is connected to query
	if(!$exists){
		$query = $connection->query("CREATE DATABASE $database");

		//if database is created
		if($query){
			echo "<p>successfully created database " . $database . "</p>";
		}
	}

	//if database already exists
	else {
		echo "<p>Database already exists</p>";
	}

	//query creates table
	//table name is postsR
	//no values can be null
	//table holds id string and posts text
	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");

	//checks if query was successfully applied or run in the database
	//<p> and </p> are html tags within php
	if($query){
		echo "<p>Successfully created table: posts</p>";
	}

	else {
		echo "<p>$connection->error</p>";
	}

	//closes connection
	$connection->close();