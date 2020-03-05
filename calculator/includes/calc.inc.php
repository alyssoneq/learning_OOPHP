<?php
	//declaring stric_types to work only with the declared variable type
	declare(strict_types = 1);
	//including the class autoload php
	include 'class-autoloader.inc.php';
	
	//grab the values from the user input using the _POST method
	$oper = $_POST["oper"];
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	
	//creating an object based upon the calc class, passing the values given by the user to the class
	//the new syntax calls the class automatically cause of the autoload function
	// the "(int)" casts the value as an integer. This was done because of the type declaration
	$calc = new Calc($oper , (int)$num1 , (int)$num2);
	
	//calling the method "calculator" to calculate the values using the try and catch
	try {
		echo $calc->calculator();
	} 
	//if the try cannot be done, an error message will be displayed
	catch(TypeError $e){
		echo "Error!:" . $e->getMessage();
	}
	
?>