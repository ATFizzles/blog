<?php
	//$path holds the string /blog/
	$path = "/blog/";

	//database info
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	//new object
	$connection = new Database($host, $username, $password, $database);