<?php

// Create directory
// mkdir(dir_name, permissions)

if (!is_dir('new_folder')) {
mkdir('new_folder', 077) or die("Can't create folder");
} else {
    echo "<p>The folder already exists</p>";
}

// Remove directory
// if (is_dir('new_folder')) {
// rmdir('new_folder') or die("Can't remove folder");
// } else {
//    echo "<p>The folder doesn't exists</p>";
// }

if($manager = opendir('./new_folder')) {
    while (false !== ($file = readdir('$manager'))) {
        echo $file;
    }
}