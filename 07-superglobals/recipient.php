<?php

// Superglobal $_GET is used to get (oh, rly? request parameters
// Problem: they are visible in the URL.

echo '<h1>Name: ' . $_GET['name'] . '</h1>';
echo '<h1>Surname: ' . $_GET['surname'] . '</h1>';

var_dump($_GET);

