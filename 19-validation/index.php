<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML Form Validation</title>
    </head>
    <body>
        <h1>HTML Form Validation</h1>
        
        <?php
            if(isset($_GET['error'])) {
                if ($_GET['error'] === 'missing_data') {
                    echo '<strong style="color:red">Missing Data!</strong>';
                }
            }
        ?>
        <form method="POST" action="process_form.php">
            <label for="name">Name</label><br />
            <input type="text" name="name" autofocus pattern="[A-Za-z]+" required autocomplete="off"/><br />
            
            <label for="surname">Surname</label><br />
            <input type="text" name="surname" pattern="[A-Za-z ]+" required autocomplete="off"/><br />
            
            <label for="age">Age</label><br />
            <input type="number" name="age" pattern="[0-9]+" required autocomplete="off" /><br />
            
            <label for="email">Email</label><br />
            <input type="email" name="email" required autocomplete="off" /><br />
            
            <label for="pass">Password</label><br />
            <input type="password" name="pass" minlength="8" required autocomplete="off"/><br />
            
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
