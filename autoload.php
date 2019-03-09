<?php
	
ini_set('log_errors', 'on');
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_log', 'error_log.txt');
ini_set('max_execution_time', '86400');
ini_set('memory_limit', '128M');
set_time_limit(0);
date_default_timezone_set('Europe/Moscow');
ini_set("pcre.backtrack_limit", "23001337");
ini_set("pcre.recursion_limit", "23001337");

require_once dirname(__FILE__) . '/vendor/autoload.php'; define('PATH', __DIR__); ?>
