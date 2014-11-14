<?php
	class Database{
		//other files cant access private info
		//created instance/global variables that can be accessed in database.php
		//easier to read and maintain code (reusable)
		//the class is creating an object
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database;
	}