<?php 

//class to update/insert the database

//the controller is made to handle all the update/insert processes, but it does NOT handle the db
//security reasons made the controller like it is done

class UsersContr extends Users {
	
	public function createUser($firstname , $lastname , $dob) {
		$this->setUser($firstname , $lastname , $dob);
	}
}