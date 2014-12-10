<?php
	require_once(__DIR__ . "/controller/login-verify.php");
	//adds the header html needed
	require_once(__DIR__ . "/view/header.php");
	if(authenticateUser()){


	//connection to navigation.php
	require_once(__DIR__ . "/view/navigation.php");
	}
	//direct connection to the database
	require_once(__DIR__ . "/controller/create-db.php");
	//adds the footer html needed
	require_once(__DIR__ . "/view/footer.php");
	//connection to read-posts.php
	require_once(__DIR__ . "/controller/read-posts.php");
?>
