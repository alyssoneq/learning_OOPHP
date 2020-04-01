<?php

	class User{
		
		//public = access anywhere
		//private = only access inside the class
		//protected = access in class and extended classes
		
		private $name;
		private $age;
		
		public function __construct($name, $age){
			
			$this->name = $name;
			$this->age = $age;
			
		}
		
		//Setting a getter
		public function getName(){
			
			return $this->name;
		}
		
		//creating a setter
		public function setName($name){
			
			$this->name = $name;
		}
		
		// __get MAGIC  METHOD		
		public function __get($property){
			
			if(property_exists($this, $property)){
				
				return $this->$property;
			}
		}
		
		//__set MAGIC METHOD
		public function __set($property, $value){
			if(property_exists($this, $property)){
				$this->$property = $value;
			}
			return $this;
		}
	}
	
	$user1 = new User('John', 40);
	
	$user1->setName('Jeff');
	echo $user1->getName();
	
	echo '<br>';
	
	//playing with the __set MAGIC METHOD
	$user1->__set('age',41);
	
	//playing with the _get MAGIC METHOD
	echo $user1->__get('age');