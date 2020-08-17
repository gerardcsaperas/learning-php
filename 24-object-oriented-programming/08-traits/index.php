<?php

// TRAITS
// Imagine that you want to create a method to be shared 
// in between different classes

trait Utilities {
    public function showName() {
        return "<h1>$this->name</h1>";
    }
}

class Dog {
    public $name, $breed;
    
    function __construct($name, $breed) {
        $this->name = $name;
        $this->breed = $breed;
    }
    
    use Utilities;
}

class Person {
    public $name, $surname;
    
    function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }
    
    use Utilities;
}

class Cat {
    public $name, $color;
    
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    
    use Utilities;
}

$dog = new Dog('Yes', 'unknown');
$person = new Person('Gerard', 'Castrelo Saperas');
$cat = new Cat('Kafka', 'black');


// I can use showName() in all instances of different classes
// showName() is a common trait in all classes.
echo $dog->showName();
echo $person->showName();
echo $cat->showName();