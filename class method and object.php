<?php
	class Person{
		public $name;
		public $age;
		public function personName(){
			echo "The person name is :".$this->name."<br/>";
		}
		public function personAge($value){
			echo "The person age is:".$this->age=$value;;
		}
	}
	$personOne = new Person();
    $value=$personOne->name="joynal Abedin";
	echo $value."<br/>";
	$personOne->personName();
	//$personOne->personAge("22");
	$personOne->personAge(22);
?>
