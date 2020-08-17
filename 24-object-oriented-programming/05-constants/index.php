<?php

class User {
    
    // Consts do not apear in a var_dump
    const URL = 'http://localhost';
    public $email;
    public $password;
    
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}

$user = new User();

var_dump($user);

// Consts are defined on a class level. It's the same for all
// instances of the class.
echo $user::URL;
echo User::URL;

