<?php
	error_reporting(E_ALL);
	//ini_set('display_errors', 1);
	date_default_timezone_set('UTC');
	//require 'predis-0.8.4/autoload.php';
	//var_dump('register autoload');
	//var_dump(class_exists(PredisAutoloader));
	//var_dump('autoload registered');
	require 'bot.php';

	$Bot = new Bot();
	var_dump('After construct');
	$Bot->update();
	var_dump('foo');
?>