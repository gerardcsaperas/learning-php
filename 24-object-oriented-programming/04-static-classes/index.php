<?php

require_once('Configuration.php');

Configuration::setColor("blue");
Configuration::setEnvironment("localhost");
Configuration::setNewsletter(true);

echo Configuration::$color;

