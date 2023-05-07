<?php
	class database
	{
		private $server = "localhost";
		private $username = "root";
		private $password = "";
		private $database = "eoq";
		
		function koneksidatabase()
		{
			$conn = new mysqli($this->server, $this->username, $this->password, $this->database);
    		if ($conn->connect_error) {
        		die("Connection failed: " . $conn->connect_error);
    		}
		}
	}
	$d1 = new database();
	$d1->koneksidatabase();
	

?>