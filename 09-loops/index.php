<?php

// While loop

$i = 0;

while($i <= 100) {
    echo ($i !== 100) ? "$i, " : "$i";
    $i++;
}

echo '<hr>';

// isset($var_name): To check if a variable is set.
if(isset($_GET['num'])) {
    // The (int) portion before the $_GET is telling PHP
    // to change the variable into an integer.
    $num = (int)$_GET['num'];
} else {
    $num = 1;
}

echo "<h1><u>$num's Multiplication Table</u></h1>";

$counter = 1;
while($counter <= 10) {
    echo "<p>$num x $counter= " . ($num * $counter) . "</p>";
    $counter++;
}

// DO WHILE
// The condition is evaluated AFTER the execution of the code
echo "<hr>";

$condition = false;

do{
    //Instructions block
    echo "<h1>This 'do...while' will execute exactly one time</h1>";
    echo "<h2>Why?</h2>";
    echo "<h2>Because the condition to keep executing isn't met.</h2>";
}while($condition);