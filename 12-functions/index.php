<?php

// FUNCTIONS
/*
 * A group of wrapped instructions
 */

// First we define the function
function showFullName()
{
    echo 'Gerard ';
    echo 'Castrelo ';
    echo 'Saperas<br>';
    echo '<hr>';
}

// Then we call the function 3 times
showFullName();
showFullName();
showFullName();

// Parameters or arguments
function suma($num1, $num2) {
    echo '<h1>Result: ' . ($num1 + $num2) . '</h1>';
    echo '<hr>';
}

suma(10, 20);

// Optional Parameters
function sumaOptionalParams($num1, $num2 = 1) {
    echo '<h1>Result: ' . ($num1 + $num2) . '</h1>';
}

sumaOptionalParams(10);

/*
 * `echo` is not a good practice inside of a function,
 * you should use `return`.
 */

function getName($name) {
    return "Your name is $name";
}

function getSurname($surname) {
    return "Your surname is $surname";
}

function returnName($name, $surname)
{   
    $fullName = getName($name) . "<br>" . getSurname($surname);
    return $fullName;
}

echo returnName("Gerard", "Castrelo Saperas");