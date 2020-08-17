<?php

require_once('Dog.php');

// Create an object (or instantiate class) from constructor
$dog = new Dog('Yes', 'Brown', 'Unknown');

$dog->color = 'Brown';

echo $dog->showInfo();