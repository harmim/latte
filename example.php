<?php

require __DIR__ . '/vendor/autoload.php';

define('TEMP_DIR', __DIR__ . '/temp');
define('TEMPLATES_DIR', __DIR__ . '/templates');

$latte = new Latte\Engine();
$latte->setTempDirectory(__DIR__ . '/temp');

$params = [
	'name' => 'Dominik',
	'surname' => 'Harmim',
	'birth' => '1997',

	'users' => [
		[
			'name' => 'Jan',
			'email' => 'novak@gmail.com'
		],
		[
			'name' => 'Petr',
			'email' => 'petr@gmail.com'
		],
		[
			'name' => 'David',
			'email' => 'david@gmail.com'
		],
	],
];

$latte->render(TEMPLATES_DIR . '/example.latte', $params);
