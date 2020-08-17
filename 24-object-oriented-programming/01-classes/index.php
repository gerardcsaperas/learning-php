<?php

//Object oriented programming in PHP (OOP)

// 1. Define a class
//
// Think about a class like a mold to create more
// objects following the same structure
class Dog {
    
    // Attributes or properties (variables)
    public $property_name;
    public $name;
    public $color;
    public $breed;
    
    // Methods (actions that the object can do)
    public function bark() {
        echo "Woof!";
    }
    
    // Notice arrow syntax to access object properties
    public function getColor() {
        return $this->color;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function getName() {
        return $this.name;
    }   
    
    public function getBreed() {
        return $this.breed;
    }
    
} // End of class definition

// Create an object (or instantiate class)
$dog = new Dog();

$dog->bark();