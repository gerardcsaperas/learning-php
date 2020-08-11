<?php

// Superglobals -- variables we can access everywhere


// Server variables
// 1. IP Address
echo '<h1>' . $_SERVER['SERVER_ADDR'] . '</h1>';
// 2. Server Name
echo '<h1>' . $_SERVER['SERVER_NAME'] . '</h1>';
// 3. Server Software
echo '<h1>' . $_SERVER['SERVER_SOFTWARE'] . '</h1>';
// 4. Browser Info
echo '<h1>' . $_SERVER['HTTP_USER_AGENT'] . '</h1>';
// 5. User's IP
echo '<h1>' . $_SERVER['REMOTE_ADDR'] . '</h1>';