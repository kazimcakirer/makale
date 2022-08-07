<?php

try {
	$db = new PDO(
		'mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'].';charset=utf8',
		$config['db']['user'],
		$config['db']['pass']
	);
} catch (PDOException $e) {
	die($e->getMessage());
}