<?php
	//gives access to database object within config.php
	require_once(__DIR__ . "/../model/config.php");
	//gets 3 inputs from form
	//storing them in variable
	//getting info via post method
	//name of input that is being applied
	//deletes characters that cant exist in emails
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	echo $password;

	//new salt variable
	//registers unique salt for users crypted info
	//tells program to uses shaw256 5000 times
	//$5$ starts salt function
	//uses huge random number to create really unique id
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

	echo $salt;