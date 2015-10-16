<?php

return array(
	'name' => 'phpforge',
	'title' => 'phpforge - lightweight web application framework',
	'theme' => 'bare',
	'php' => array (
		'display_startup_errors' => false,
		'display_errors' => false,
		'error_reporting' => false
	),
	'routing' => array(
		'depth' => 3,
		'cache' => false
	),
	'modules' => array(
		'cache' => false
	),
);