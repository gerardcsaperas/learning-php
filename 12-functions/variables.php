<?php

// LOCAL AND GLOBAL VARIABLES

$phrase = "Lorem ipsum amet dolor...";

function loremPrint() {
    // We first tell to PHP that the variable $phrase is
    // defined outside of the function
    global $phrase;
    
    return "<h1>$phrase</h1>";
}

echo loremPrint();
