<?php

// Name convention to autoload classes
function app_autoloader($class) {
    require_once 'classes/' . $class . '.php';
}

// Automatically loads all classes inside the specified path
// in autoloader
spl_autoload_register('app_autoloader');

