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

		//correct way to define your constructor variables
		//_construct allows you to build an object
		//accepted parameters are passed when the object is created
		public function __construct($host, $username, $password, $database){
			//storing info by assigning info to global variables
			//constructor variables
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}

		//functions get rid of excess repetition
		//opens connection
		public function openConnection(){

		}
		//closes connectiom
		public function closeConnection(){

		}

		//string always passed as a variable
		public function query($string){

		}
	}