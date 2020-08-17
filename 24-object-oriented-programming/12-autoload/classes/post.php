<?php

namespace myClass;

class Post {
    public $title, $date;
    
    function __construct($name, $email) {
        $this->title = $name;
        $this->date = $email;
    }

}