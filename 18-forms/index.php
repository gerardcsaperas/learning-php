<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="name">Name</label>
            <input type="text" name="name" autofocus pattern="[A-Z ]+" required placeholder="John"/>
            
            <label for="surname">Surname</label>
            <input type="text" name="surname" pattern="[A-Z ]+" required placeholder="Doe"/>
            
            <input type="submit" value="Submit" />
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
