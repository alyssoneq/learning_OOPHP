<?php

//scope resolution operator(::)

//here is the first class example!

class firstclass {
	//properties
	
	//const is a constant meaning you cant modify its value
	//convention -> always uppercase letters for constants
	const EXAMPLE = "you cant change this!";
	
	//methods
	public static function test(){
		$testing = "this is a test";
		return $testing;
	}
}

//the scope resolution allows access for static and constant from a class
$a = firstclass::EXAMPLE;
$b = firstclass::test(); 
//echo $a . "<br>"; 
//echo $b ;


//here is the second example!!!

class secondclass extends firstclass {
	
	//static properties
	public static $staticproperty = "a static property";
	
	//methods
	public static function anothertest(){
		
		//parent gets static property values from the class the code is extending from (aka parent class)
		echo parent::EXAMPLE . "<br>";
		
		//self gets static property values from the same class the code is
		echo self::$staticproperty;
	}
}

$c = secondclass::anothertest();
echo $c;
?>