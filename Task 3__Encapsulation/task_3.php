<?php
	class Employee {
		public $name;
		private $salary;
		
		public function setSalary($salary) {
			$this->salary = $salary;	// $this->salary references the class property
		}
		
		public function getSalary() {
			return $this->salary;		// $this->salary references the class property
		}
	}
	
	// Creating an object of the Employee class
	$employee = new Employee();
	
	$employee->name = "Israk Ahmed";
	
	// Set the salary using the setSalary method
	$employee->setSalary(1234.5);
	
	echo "Name: " . $employee->name . "\n";
	
	// Get the salary using the getSalary method and print it
	echo "Salary: " . $employee->getSalary();
?>