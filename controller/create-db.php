<?php
	//connects to index
	require_once(__DIR__ . "/../model/config.php");
	
	//query creates table
	//table name is postsR
	//no values can be null
	//table holds id string and posts text
	$query = $_SESSION{"connection"}->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");

	//checks if query was successfully applied or run in the database
	//<p> and </p> are html tags within php
	if($query){
		echo "<p>Successfully created table: posts</p>";
	}

	//creating new session to open connection
	else {
		echo "<p>" . $_SESSION{"connection"}->error . "</p>";
	}