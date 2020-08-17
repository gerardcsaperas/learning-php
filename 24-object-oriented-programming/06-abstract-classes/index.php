<?php

// An abstract class is a class that can't be instantiated
// but CAN be inherited.
// 
// In order for a class to be abstract, just add `abstract`
// before class definition
abstract class Computer {
    
    public $on;
    
    
    // We can't define abstract functions inside parent
    abstract public function turnOn();
    
    abstract public function turnOff();
}

class AsusLaptop extends Computer{
    public $software;
    
    public function runSoftware() {
        $this->software = true;
    }
    
    // Now we HAVE TO define what turnOn() does.
    public function turnOn() {
        $this->on = true;
    }
    
    public function turnOff() {
        $this->on = false;
    }
}

$computer = new AsusLaptop();
$computer->turnOn();
$computer->runSoftware();

var_dump($computer);
