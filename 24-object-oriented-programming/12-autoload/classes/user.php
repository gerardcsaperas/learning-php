<?php

namespace myClass;

class User {
    public $name, $email;
    
    function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

}
