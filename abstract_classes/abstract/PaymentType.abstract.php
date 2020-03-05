<?php

//abstract classes are ONLY used if another class needs it
//it is NOT possible to create objects based on abstract classes

abstract class Visa {
	public function visaPayment(){
		return "Perform a payment";
	}
	
	//to create an abstract function, then the whole class needs to be abstract too
	//abstract functions need to be used in classes extended to abstract classes
	
	abstract public function getPayment();
	
	
}
?>