<?php

//regular class

include_once "classes/simplesclass.class.php";

$obj = new SimplesClass();
$obj->helloWorld();

/*Anonymous class
	-They are used once and in one place of the website
	-They are not stored in the website memory
	-less heavy to load
	-the class it is destroyed after the object is created
	-The object owns all the methods of the anonymous class
*/

$newObj = new Class() {
	public function helloWorld() {
		echo "Hello World!";
	}
};

$newObj->helloWorld();