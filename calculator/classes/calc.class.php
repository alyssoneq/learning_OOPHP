<?php 

class Calc {
	
	//properties 	
	public $operator;
	public $num1;
	public $num2;
	
	//a construct to get all the values for each property 
	//note the data type beside every property in the construct function
	public function __construct(string $one , int $two , int $three ){
		
		//$this-> assigns the value from a user input to the property
		$this->operator = $one;
		$this->num1 = $two;
		$this->num2 = $three;
	}
	
	//method for the actual calculation
	//no need to assign properties in the method because it was done in the construct
	public function calculator() {
		//to reference a property use $this->
		switch($this->operator){
			case 'add':
				$result = $this->num1 + $this->num2;
				return $result;
				break;
			case 'sub':
				$result = $this->num1 - $this->num2;
				return $result;
				break;
			case 'div':
				$result = $this->num1 / $this->num2;
				return $result;
				break;
			case 'mul':
				$result = $this->num1 * $this->num2;
				return $result;
				break;
			default:
				echo "Error!!";
				break;
			
		}
	}
}
?>