<?php
	class Employee {
		private $name;
		
		public function setName($name) {
			$this->name = $name;	// $this->name references the class property
		}
		
		public function getName() {
			return $this->name;		// $this->name references the class property
		}
	}
	
	// Creating an object of the Employee class
	$employee = new Employee();
	
	// Set the name using the setName method
	$employee->setName("Israk Ahmed");
	
	// Get the name using the getName method and print it
	echo $employee->getName();
?>