<?php

/* 
 * A constant is an information container that can't
 * change over time. It would be a 'const' in Javascript.
 * To use it, we just use its name (without $ sign). 
 */

define('name', 'Gerard Castrelo Saperas');
define('web', 'https://www.gerard.ninja');

echo "<h1>" . name . "</h1>";
echo "<h2>Portfolio: "
        . "<a href=" . web. ">"
        . web . "</a>"
      . "</h2>";


// To access predefined variables, start typing:
// 1) PHP_...
// 2) __
echo "<p>PHP Version: " . PHP_VERSION;