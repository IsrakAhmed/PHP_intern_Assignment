<?php

	// Base class Animal
	class Animal {
		
		// Method to be overridden by subclasses
		public function makeSound() {
			echo "Generic Sound" . "\n";
		}
	}
	
	// Subclass Dog
	class Dog extends Animal {
		
		// Overriding the makeSound method
		public function makeSound() {
			echo "Dog Sounds : Ghew Ghew" . "\n";
		}
	}
	
	// Subclass Cat
	class Cat extends Animal {
		
		// Overriding the makeSound method
		public function makeSound() {
			echo "Cat Sounds : Meow Meow" . "\n";
		}
	}
	
	// Subclass Cow
	class Cow extends Animal {
		
		// Overriding the makeSound method
		public function makeSound() {
			echo "Cow Sounds : Hambaaaaa" . "\n";
		}
	}
	
	// Creating instances of each class
	$animal = new Animal();
	$animal->makeSound();
	
	$dog = new Dog();
	$dog->makeSound();
	
	$cat = new Cat();
	$cat->makeSound();
	
	$cow = new Cow();
	$cow->makeSound();
	
	
?>