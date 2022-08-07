<?php
session_start();
ob_start();

require 'settings.php';
$config = require 'config.php';

foreach (glob(PATH.'/app/core/*.php') as $value) {
	require $value;
}