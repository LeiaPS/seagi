<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/seagi/");
	define("CSS_URL", "http://localhost/seagi/assets/css/");
	define("JS_URL", "http://localhost/seagi/assets/js/");
	define("IMG_URL", "http://localhost/seagi/assets/img/");
	$config['dbname'] = 'seagi';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://wellingtonostemberg.com.br/seagi/");
	define("CSS_URL", "http://wellingtonostemberg.com.br/seagi/assets/css/");
	define("JS_URL", "http://wellingtonostemberg.com.br/seagi/assets/js/");
	define("IMG_URL", "http://wellingtonostemberg.com.br/seagi/assets/img/");
	$config['dbname'] = 'welling1_leia';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'welling1_leia';
	$config['dbpass'] = 'Padrao123@';
}

global $db;
try {
	$opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'], $opcoes);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}