<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

DEFINE('DS', DIRECTORY_SEPARATOR);

use Forge\Application;

// Composer autoloader
$autoloader = include_once('../vendor/autoload.php');

// Pass autoloader to Application, it will then inherit all instances of Forge\Application\Module
$application = new Application($autoloader);
$application->process()
	->render();