<?php

// FOR LOOPS
/*
  for(counter, condition, counter_increaser) {
 
    instructions
  
  }
 */

$result = 0;

for($i = 0; $i <= 100; $i++) {
    $result += $i;
    
    // I could add an if() {break} condition to get out
    // of the for loop.
    
}

echo $result;