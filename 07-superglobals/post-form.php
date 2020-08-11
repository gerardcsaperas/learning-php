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
         * With the POST method, the data is hidden.
         * (not shown in the URL).
         */
        ?>
        <form method="POST" action="post-recipient.php">
            <label for="name">Name</label>
            <input type="text" name="name" />
            
            <label for="surname">Surname</label>
            <input type="text" name="surname" />
            
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
