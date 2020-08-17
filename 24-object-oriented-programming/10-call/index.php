<?php

// 
// __call()
// triggered when invoking inaccessible methods in an object context.
//
// __callStatic()
// triggered when invoking inaccessible methods in a static context.

class Person {
    private $name, $age, $city;
    
    function __construct($name, $age, $city) {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }
    
    // This will fire if a non defined method is called
    function __call($name, $arguments) {
        return "The method does not exist";
    }
}

$person = new Person('Gerard', '27', 'Barcelona');

// getName() does not exist inside Person, therefore
// __call() is fired.
echo $person->getName();