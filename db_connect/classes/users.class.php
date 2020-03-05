<?php

//model file of the MVC structure
//this file is only used to interact with the database

//this class extends Dbh because Dbh handles the connection with the database
class Users extends Dbh {
	
	//protected function locks the method to be only accessed by classes
	protected function getUser($name){
		
		$sql = "SELECT * FROM users WHERE users_firstname = ?";
		
		//asking to prepare the statement inside the database instead of query
		$stmt = $this->connect()->prepare($sql);
		
		//filling the blanks left by the ?
		//using the execute method to actually run the data
		$stmt->execute([$name]);
		
		$results = $stmt->fetchALL();
		return $results;
	}
	
	
	protected function setUser($firstname , $lastname , $dob) {
		//prepared statement to insert data on the db
		$sql = "INSERT INTO users(users_firstname , users_lastname , users_dateofbirth) VALUES(? , ? , ?)";
		
		//asking to prepare the statement inside the database instead of query
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$firstname , $lastname , $dob]);
		
		
	}
}