<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

chdir(dirname(__FILE__));

DEFINE('DS', DIRECTORY_SEPARATOR);


DEFINE('BASE_URI', preg_replace(
	array('/\/$/', '/\/sssweb$/'),
	'',
	key_exists('REDIRECT_BASE_URL', $_SERVER) ? filter_input(INPUT_SERVER, 'REDIRECT_BASE_URL') : filter_input(INPUT_SERVER, 'BASE_URL'))
);

use Forge\Application;

// Composer autoloader
$autoloader = include_once('../vendor/autoload.php');

// Pass autoloader to Application, it will then inherit all instances of Forge\Application\Module
$application = new Application($autoloader);
$application->process()
	->render();