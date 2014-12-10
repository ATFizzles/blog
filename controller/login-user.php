<?php
	require_once(__DIR__ . "/../model/config.php");

	//new username variable
	//gets input from post
	//filtering by sanitizing the string
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	//$_SESSION is where database connection is stored
	//sql statement that selects salt and password
	//username is selected by the query
	//storing salt and password in query variable
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

	//checks if records were stored in query
	if($query->num_rows == 1){
		//fetches array stored in query and stores it in row
		$row = $query->fetch_array();

		//=== checks if they are the same type
		//checks if hashed password stored in database is equal to new hashed password stored as salt
		//crypt function is case sensitive
		if($row["password"] === crypt($password, $row["salt"])) {
			//confirms that user has logged in/been authenticated
			$_SESSION["authenticated"] = true;
			echo "<p>Login was successful</p>";
		}

		else{
			echo "<p>Invalid username and password</p>";
		}
	}

	//if query couldnt store a username
	else{
		echo "<p>Invalid username and password</p>";
	}