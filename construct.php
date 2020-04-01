<?php

	class User {
		
		public $name;
		public $age;
		
		// creating the construct (magic method)
		// It is runs automatically when object instantiated
		public function __construct($name, $age) {
			
			//example of magic constant
			echo 'Class' . __CLASS__ . ' instantiated<br>';
			
			$this->name = $name;
			$this->age = $age;
		}
		
		public function sayHello(){
			return $this->name . ' says hello';
		}
		
		// Called when no other references to a certain object
		// Used for cleanup, closing connects, etc
		// destruct is a magic method too
		public function __destruct(){
			
			echo 'destructor ran...';
		}
	}
	
	//user 1
	$user1 = new User('Brad', 36);
	
	echo $user1->name. ' is ' . $user1->age . ' years old';
	echo '<br>';
	echo $user1->sayHello();
	
	echo '<br>';
	
	//user 2
	$user2 = new User('Sara', 25);
	
	echo $user2->name. ' is ' . $user2->age . ' years old';
	echo '<br>';
	echo $user2->sayHello();
	
	echo '<br>';