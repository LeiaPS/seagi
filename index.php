<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", "On");

require 'config.php';
require 'vendor/autoload.php';

$core = new Core\Core();
$core->run();