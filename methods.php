<?php

// static methods 
// they are good for processes repeated many times
// example: password validation
// password validation is the same not matter what

	class User{
		public $name;
		public $age;
		
		//static property
		//static does NOT change with the instantiation
		public static $minPassLenght = 6;
		
		public static function validatePass($pass){
			
			//self:: is used to access static property
			if(strlen($pass) >= self::$minPassLenght){
				
				return true;
			}else {
				return false;
			}
		}
	}
	
	$password = 'hello';
	
	//Static method is called with no instantiation
	//To call it type NameOfClass::NameOfMethod
	if(User::validatePass($password)){
		echo 'Password valid';
	}else {
		echo 'Password NOT valid';
	}