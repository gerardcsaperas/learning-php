<?php

// Capture exceptions in error prone code

// Try something...(if error) catch...
try {
    if (isset($_GET['id'])){
        var_dump($_GET['id']);
    } else {
        // This will simulate an error inside our try
    throw new Exception('Logic Error');
    }
    
} catch (Exception $ex) {
    echo $ex->getMessage();
}