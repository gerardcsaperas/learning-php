<?php

// FILE MANAGEMENT

// Open File
$file = fopen("text_file.txt", "a+");

// Read File
while(!feof($file)) {
  $content = fgets($file);
  echo $content . "<br />";  
}

// Write Inside a File
fwrite($file, "I am a text written from PHP");

// Close File
fclose($file);

