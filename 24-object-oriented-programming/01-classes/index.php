<?php

//Object oriented programming in PHP (OOP)

// 1. Define a class
//
// Think about a class like a mold to create more
// objects following the same structure
class Dog {
    
    // Attributes or properties (variables)
    // PUBLIC: We can access it from everywhere inside the current class
    //         inside classes that inherit this class or outside this class
    public $color;
    
    // PROTECTED: We can access it from the class that defines them and objects
    //            that inherit this class
    protected $name;
    
    // PRIVATE: Only accessible from this class
    private $breed;
    
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
        return $this->name;
    }   
    
    public function getBreed() {
        return $this->breed;
    }
    
} // End of class definition

// Create an object (or instantiate class)
$dog = new Dog();

$dog->bark();