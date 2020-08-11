<?php

// Conditionals, If...Else... Elseif...
/*
 * if(condition) {
 *      instructions
 * } elseif(condition 2) {
 *      instructions
 * } else {
 *      default instructions
 * }
 */

$color = 'red';

// For comparison operators: https://www.w3schools.com/php/php_operators.asp

if($color === 'red') {
    echo 'The color is red.';
} else {
    echo 'The color is not red.';
}

/*
 * Everything is the same (or almost the same as in
 * Javascript. If you have any doubt, read documentation.
 */

// Switches and ternary operators are also valid

// GOTO
echo "<h3>Instruction 1</h3>";
echo "<h3>Instruction 2</h3>";
echo "<h3>Instruction 3</h3>";

goto mark;
echo "<h3>Instruction 4</h3>";
echo "<h3>Instruction 5</h3>";
echo "<h3>Instruction 6</h3>";
echo "<h3>Instruction 7</h3>";
echo "<h3>Instruction 8</h3>";
echo "<h3>Instruction 9</h3>";

mark:
    echo "<p>I skipped instructions 4 to 9 with a badass `goto {markName}:`</p>";
    echo "<h3>Instruction 10</h3>";