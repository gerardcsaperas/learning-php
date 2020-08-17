<?php

class User {
    public $name, $email;
    
    function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
        echo "<h1>$this->name constructed</h1>";
    }

    function __destruct() {
        echo "<h1>$this->name destructed</h1>";
    }
}

// __destruct() is called at the end of our script;

$user = new User('Gerard', 'gcsaperas@gmail.com');

var_dump($user);

// Tip: Don't echo inside __construct() nor __destruct().
// I did it purely for didactic purposes.

