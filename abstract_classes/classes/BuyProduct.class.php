<?php

//extends is used to inherent the methods/functions created in the Visa class
//because Visa is an abstract class, then the BuyProduct class needs to use all the abstract methods inside Visa

class BuyProduct extends Visa {
	public function getPayment() {
		return $this->visaPayment();
	}
}
?>