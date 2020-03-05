<?php

//name of the file needs to match class name

//to use the connect method just extend future classes to the Dbh class


class Dbh {
	
	//private property only accessed by the class where the property is
	private $host = "localhost";
	private $user = "root";
	private $pwd = "";
	private $dbName = "oopphp16";
	
	protected function connect() {
		
		//DSN = data source name 
		
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
		$pdo = new PDO($dsn , $this->user , $this->pwd);
		
		/*setting the attribute for the PDO connection
			- the attribute was set to determine the fetch mode used in the database
			- the fetch mode determined here is the fetch associative
		*/
		
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);
		return $pdo;
	}
}