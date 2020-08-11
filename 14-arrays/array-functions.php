<?php

// ARRAY FUNCTIONS
// SORTING
// More info about sorting: https://www.w3schools.com/php/php_arrays_sort.asp

$cars = ["VW", "Volvo", "Toyota", "Lexus", "Ferrari", "Opel", "Peugeot"];

echo "<h2>Cars Sorted Ascending</h2>";
sort($cars);
echo "<ol>";
foreach($cars as $car) {
    echo "<li>$car</li>";
}
echo "</ol>";

echo "<h2>Cars Sorted Descending</h2>";
rsort($cars);
echo "<ol>";
foreach($cars as $car) {
    echo "<li>$car</li>";
}
echo "</ol>";

// Add values to an array
$cars[] = "Mazda";
array_push($cars, 'Lamborghini');

// Remove last index from array
array_pop($cars);

// Remove an index from array
unset($cars[0]);

// Randomly get an index number from an array with array_rand();
echo $cars[array_rand($cars)];

// Reverse an array
array_reverse($cars);

// Search index of a value inside of an array
echo "<br>";
$search = array_search('Toyota', $cars);
echo $cars[$search];

// Count number of elements
echo "<p>Number of elements in cars array: " . sizeof($cars) . "</p>";