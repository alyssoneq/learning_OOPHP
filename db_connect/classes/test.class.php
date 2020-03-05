<?php

class Test extends Dbh {
	
	public function getUsers() {
		$sql = "SELECT * FROM users";
		$stmt = $this->connect()->query($sql);
		while($row = $stmt->fetch()){
			echo $row['users_firstname'] . '<br>';
		}
	}
	
	
	/* using prepared statements for security manners
		- it prevents users from injecting code inside the database
		- this runs the mysql statement without input, then later input is added by the db
	*/
	public function getUsersStmt($firstname , $lastname) {
		$sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
		
		//asking to prepare the statement inside the database instead of query
		$stmt = $this->connect()->prepare($sql);
		
		//filling the blanks left by the ?
		//using the execute method to actually run the data
		$stmt->execute([$firstname , $lastname]);
		
		$names = $stmt->fetchALL();
		
		foreach($names as $name){
			echo $name['users_firstname'].'<br>';
		}
	}
	
	public function setUsersStmt($firstname , $lastname , $dob) {
		//prepared statement to insert data on the db
		$sql = "INSERT INTO users(users_firstname , users_lastname , users_dateofbirth) VALUES(?,?,?)";
		
		//asking to prepare the statement inside the database instead of query
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$firstname , $lastname , $dob]);
		
		
	}
}