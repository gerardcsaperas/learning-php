<?php

// MANAGE FILE UPLOAD
// $_FILE

$file = $_FILES['file'];

$file_name = $file['name'];
$file_type = $file['type'];

if (
           $file_type === 'image/jpg'
        || $file_type === 'image/jpeg'
        || $file_type === 'image/png'
        || $file_type === 'image/gif'
    ) {
    
    if(!is_dir('images')) {
        
        mkdir('images', 077);
        
    }
    
    move_uploaded_file($file['tmp_name'], 'images/'.$file_name);
    
    header("Refresh: 2; URL=index.php");
    echo '<h1>Imagen subida correctamente</h1>';
    
} else {
    header("Refresh: 2; URL=index.php");
    $message = 'Please, upload an image with the following extensions:\n'
            . 'jpg, jpeg, png or gif.';
    echo "<script type='text/javascript'>alert('$message');</script>";
}

