<?php
//Interfaces

//interfaces to organize the method payments

interface PaymentInterface {
	//defining rules for the interface
	//rules defined here lock the name of the methods inside classes
	//if a method is not named after this rule below, then an error message will appear
	public function payNow();
}

interface LoginInterface {
	//defining rules for the interface
	//it is possible to add multiple rules in one interface
	//multiples rules = error if not all rules are followed
	public function loginFirst();
}

//methods to choose the form of payment

class Paypal implements PaymentInterface, LoginInterface {
	public function loginFirst() {}
	public function payNow() {}
	public function paymentProcess() {
		$this->loginFirst();
		$this->payNow();
	}
}

class BankTransfer implements PaymentInterface, LoginInterface {
	public function loginFirst() {}
	public function payNow() {}
	public function paymentProcess() {
		$this->loginFirst();
		$this->payNow();
	}
}

class Visa implements PaymentInterface {
	public function payNow(){}
	public function paymentProcess() {
		$this->payNow();
	}
}

class Cash implements PaymentInterface {
	public function payNow(){}
	public function paymentProcess() {
		$this->payNow();
	}
}

//below there is no complete structure. Just basic structure of the code of a real payment website
//class to process the payment itself

class BuyProduct {
	
	//in this method the interface is referenced to group the classes
	public function pay(PaymentInterface $paymentType){
		$paymentType->paymentProcess();
	}
	
	public function onlinePay(LoginInterface $paymentType){
		$paymentType->paymentProcess();
	}
	
}

//objects created to process the payment

$paymentType = new paypal();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
?>