<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HTML Form</title>
    </head>
    <body>
        <h1>PHP Form</h1>
        <?php
        /*
         * GET method's parameters are stored in the URL.
         * 
         * Once the following form gets submitted,
         * the user will be redirected to `recipient.php`
         */
        ?>
        <form method="GET" action="recipient.php">
            <label for="name">Name</label>
            <input type="text" name="name" />
            
            <label for="surname">Surname</label>
            <input type="text" name="surname" />
            
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
