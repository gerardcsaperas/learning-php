<?php

/* COOKIES
 * Cookies are a mechanism by which user data is stored
 * in the browser.
 * 
 * i.e. Login cookies / Form cookies...
 * 
 */

// A cookie is created with the setcookie() function.
// setcookie(name, value, expire, path, domain, secure, httponly);

// Basic cookie
setcookie("my_cookie", "my_cookie value");

// Cookie with expiration
setcookie("yearly_cookie", "yearly_cookie_value", time()+(60*60*24*365));

?>

<a href="see_cookies.php">See cookies</a>

