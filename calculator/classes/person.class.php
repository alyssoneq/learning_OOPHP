<?php

class Person {
	//Properties
	private $name;
	private $eyeColor;
	private $age;
	
	/*static property_exists
	
	public static $drinkingAge = 21;*/
	
	public function __construct($name, $eyeColor, $age){
		$this->name = $name;
		$this->eyeColor = $name;
		$this->age = $age;
	}
	
	//Methods
	public function getPerson(){
		return $this->name . " is " . $this->age . " old";
	}
	
	
	/*public static function setDrinkingAge($newDA){
		self::$drinkingAge = $newDA;
		
	}*/
}
?>