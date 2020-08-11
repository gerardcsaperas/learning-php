<?php

// var_dump($variable);
$num = 1;
var_dump($num);

// gettype($variable);

// is_XXsomethingXX($variable);

// isset($variable); checks if a variable exists.

// Delete variable
$year = 2020;
unset($year);

// Check if a variable is empty
$someVar = "";
empty($someVar);
// -> true

// DATES
// More formats at https://www.w3schools.com/php/func_date_date.asp
echo date('d-m-Y');

// TIME
echo "<br>";
echo "<p> Unix-formatted time: " . time() . "</p>";

// MATH
// Square Root
echo "Square root for 10: " . sqrt(10);
echo "<br>";

// Random Number
echo "Random number 1-10: " . rand(1, 10);
echo "<br>";

// Pi number
echo "Pi number: " . pi();
echo "<br>";

// Round
echo "Let's round 3.412313 to 2 decimals: " . round(3.412313, 2);
echo "<br>";


// STRINGS
// Trim cleans initial and ending spaces.
$text = "     trim me!     ";
echo trim($text);
echo "<br>";

// Count number of characters
strlen("abcde");
// -> 5

// Return index of a character
$phrase = "Life's good";
echo strpos($phrase, "good");

// Replace string's content
$phrase = str_replace("good", "food", $phrase);
echo "<br>";

// MAYUS-minus
echo strtolower("STRING");
echo "<br>";

echo strtoupper("string");
echo "<br>";

