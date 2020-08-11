<?php

// See cookies' value
// $_COOKIE['cookie_name']

if(isset($_COOKIE['my_cookie'])) {
    echo "<h1>" . $_COOKIE['my_cookie'] . "</h1>";
}
if(isset($_COOKIE['yearly_cookie'])) {
    echo "<h1>" . $_COOKIE['yearly_cookie'] . "</h1>";
}

?>

<a href="delete_cookies.php">Delete cookies</a>