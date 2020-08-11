<?php

// include/require lets us write scalable, reusable code.
// (also includes functions)


// include_once ensures we only include the component 
// one time.
    include_once 'components/header.php';
    echo "<h1>This comes from index.php</h1>";
    include_once 'components/footer.php';
    
?>

