<?php

/*
 * We can require every class manually...
 */
// require_once('classes/user.php');
// require_once('classes/category.php');
// require_once('classes/post.php');

/*
 * Or we can use a single REQUIRE in order to automatically
 * load all the classes 
 */

require_once('autoload.php');


$user = new User('Gerard', 'gcsaperas@gmail.com');
$category = new Category('Japan', 'posts about Japan');
$posts = new Post('Japan Post 1', 'Post About Japan Bla Bla');

echo $user->name;

