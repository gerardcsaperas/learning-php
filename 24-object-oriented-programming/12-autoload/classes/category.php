<?php

namespace myClass;

class Category {
    public $name, $description;
    
    function __construct($name, $email) {
        $this->name = $name;
        $this->description = $email;
    }

}