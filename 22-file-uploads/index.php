<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP File Uploads</title>
    </head>
    <body>
        <h1>PHP File Uploads</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" value="upload" />
        </form>
        
        <h1>Img List</h1>
        <?php
        $manager = opendir('./images');
        
        if ($manager) {
            while(($image = readdir($manager)) !== false) {
                if($image !== '.' && $image !== '..') {
                    echo "<img src='images/$image' width='200px' /><br />";
                }
            }
        }
        ?>
    </body>
</html>
