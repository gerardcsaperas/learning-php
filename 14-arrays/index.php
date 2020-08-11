<?php

// ARRAYS
// An array stores multiple values in one single variable

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo "<br>";

$djs = ['Avicii', 'Tiesto', 'Skrillex'];

// for loops to go through arrays 
echo "<ul>";
for($i = 0; $i < count($djs); $i++) {
    global $djs;
    
    echo "<li>" . $djs[$i] . "</li>";
}
echo "</ul>";

// foreach is specialy designed to go through entire arrays
// You can also normally break out of a foreach.

echo "<ol>";
foreach($djs as $dj) {
    if($dj === 'Tiesto') {
        echo "<li>" . $dj . "</li>";
        break;
    }
    
    echo "<li>" . $dj . "</li>";
}
echo "</ol>";


// ASSOCIATIVE ARRAY
$person = array(
    'name' => 'Gerard',
    'surname' => 'Castrelo Saperas',
    'web' => 'https://www.gerard.ninja'    
);

echo "<h1>My web is: " . $person['web'] . "</h1>";

// MULTIDIMENSIONAL ARRAY
// Array inside array inside...

$contacts = array(
    array(
        'name' => 'Mònica',
        'surname' => 'Velázquez Silvestre',
        'birthdate' => '2 OCT 1993'
    ),
    array(
        'name' => 'Mònica',
        'surname' => 'Velázquez Silvestre',
        'birthdate' => '2 OCT 1993'
    ),
    array(
        'name' => 'Mònica',
        'surname' => 'Velázquez Silvestre',
        'birthdate' => '2 OCT 1993'
    )
);

var_dump($contacts[0]['name']);
var_dump($contacts[1]['surname']);
var_dump($contacts[2]['birthdate']);

echo "<hr>";

foreach($contacts as $contact) {
    var_dump($contact['name']);
}