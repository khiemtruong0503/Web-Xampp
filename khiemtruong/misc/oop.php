<?php
	abstract class Car{
		public $name;
		public $brand;
		public static $type = "abc";

		public function funcA(){
			echo "Name: " . $this->name . "</br>";
			echo "Brand: " . $this->brand . "</br>";
			echo "Type: " . self::$type;
		}	
		abstract public function funcB($param1, $param2, $param3 = "");
		function __construct($name = "Lux", $brand = "VinFast"){ // final
			$this->name = $name;
			$this->brand = $brand;
		}
		function __destruct(){
			//echo "End";
		}
	}

	class Ford extends Car{
		function __construct($name = "Ranger", $brand = "Ford"){
			$this->name = $name;
			$this->brand = $brand;

			echo "Type: " . parent::$type;
		}
		public function funcB($param1, $param2){
			return "string";
		}
	}

	// $vin = new Car("Lux", "VinFast");
	// $vin->funcA();

	$ford = new Ford();
	$ford->funcA();

	// echo Car::$type;
?>