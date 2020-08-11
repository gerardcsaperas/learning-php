<?php

// COPY
// copy('text_file.txt', 'copied_file.txt') or die('Error when copying');

// RENAME
// rename('copied_file.txt', 'new_file.doc');

// DELETE
// unlink('new_file.doc') or die("Can't delete file");

// Check if a file exists
if(file_exists('text_file.txt')) {
    echo "<h1>text_file.txt exists</h1>";
} else {
    echo "<h1>text_file.txt doesn't exist</h1>";
}

