<?php
// define variables and set to empty values
$error = $name = $surname = $age= $email = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $surname = test_input($_POST["surname"]);
  $email = test_input($_POST["email"]);
  $age = test_input($_POST["age"]);
  $pass = test_input($_POST["pass"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Validate
if(!is_string($name) || !preg_match("/[a-zA-z]+", $name)) {
    $error = 'name';
}

if(!is_string($surname) || !preg_match("/[a-zA-z ]+", $surname)) {
    $error = 'surname';
}

if(!is_numeric($age) || !filter_var($age, FILTER_VALIDATE_INTE)) {
    $error = 'age';
}

if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = 'email';
}

if(!is_string($pass) || !strlen($pass) >= 8) {
    $error = 'pass';
}

var_dump($error);

// We could now, with a switch statement (for example)
// return different error messages.

// That would be server-side form validation.

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        a
    </body>
</html>
