<?php

// Inheritance is the ability to share properties and methods
// between classes

class People {
    
    public $name, $surname, $age;
    
    function __construct(string $name, string $surname, int $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getAge() {
        return $this->age;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setAge($age) {
        $this->age = $age;
    }
    
    function speak() {
        return "Hi!";
    }
    
    function walk() {
        return "<walking...>";
    }
}

class WebDeveloper extends People {
    
   public $techStack;
   
   function __construct($name, $surname, $age, $techStack) {
       $this->name = $name;
       $this->surname = $surname;
       $this->age = $age;
       $this->techStack = $techStack;               
   }
   
   function develop() {
       return "I know how to use PHP! Muahahaha!";
   } 
   
   function setTechStack($techStack) {
       $this->techStack = $techStack;
    }
    
}
