<?php

	//Define a class

	class User {
	
		//Properties (attributes)
		public $name = 'Brad';
		
		//Methods (functions)
		public function sayHello() {
			return $this->name . ' says Hello';
		}
	}
	
	//Instatiate a user object from the user class
	$user1 = new User();
	
	// It is possible to define the name out of the class
	// Possible cause property is public
	$user1->name = 'Brad';
	echo $user1->name;
	
	echo '<br>';
	
	echo $user1->sayHello();
	
	echo '<br>';
	
	// create new user
	
	$user2 = new User();
	
	$user2->name = 'Jeff';
	echo $user2->name;
	echo '<br>';
	echo $user2->sayHello();
