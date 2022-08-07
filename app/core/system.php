<?php

function _lang($param) {
	//$lang='tr';
	$langArray = require 'lang/tr.php';
	return $langArray[$param];
}

function post($param) {
	if(isset($_POST[$param])) {
		if(is_array($_POST[$param])) {

			array_map(function($item){
				htmlspecialchars(trim($item));
				return $item;
			}, $_POST[$param]);
			return $_POST[$param];
		} else {
			return htmlspecialchars(trim($_POST[$param]));
		}
	} else {
		return false;
	}
}

function get($param) {
	if(isset($_GET[$param])) {
		if(is_array($_GET[$param])) {
			array_map(function($item){
				htmlspecialchars(trim($item));
				return $item;
			}, $_GET[$param]);
			return $_GET[$param];
		} else {
			return htmlspecialchars(trim($_GET[$param]));
		}
	} else {
		return false;
	}
}
