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

		//a function is a block of statements that can be used again and again in a program
		//functions are executed by a call to a function
		//functions get rid of excess repetition
		//opens connection
		//creates new mysqli object
		//checks if there is a conection error
		public function openConnection(){
			$this->connection = new mysqli($this->host);
			$this->connection = new mysqli($this->username);
			$this->connection = new mysqli($this->password);
			$this->connection = new mysqli($this->database); 

			//checks for error
		if($this->connection->connect_error) {
			die("<p>Error: " . $this->connection->connect_error . "</p>");
	}

		}
		//closes connectiom
		public function closeConnection(){
			//isset checks if there is something in the variable (if there is info)
			//checks for info in connection variable
			if(isset($this->connection)){
				$this->connection->close();
			}
		}

		//string always passed as a variable
		public function query($string){

		}
	}