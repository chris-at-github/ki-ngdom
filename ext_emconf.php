<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Ai',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Christian Pschorr',
	'author_email' => 'pschorr.christian@gmail.com',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '0.0.2',
	'constraints' => [
		'depends' => [
			'typo3' => '9.5.0-9.5.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
	'autoload' => [
		'psr-4' => [
			'Ps\\Ai\\' => 'Classes',
		],
	],
];
