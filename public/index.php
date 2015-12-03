<?php



$request_uri = $_SERVER['REQUEST_URI'];

$php_self = $_SERVER['SCRIPT_NAME'];

$php_dir = str_replace('index.php','',$php_self);

$route = $request_uri;

if($php_dir != '/') $route = str_replace($php_dir, '', $route);

if($route{0} != '/') $route = '/' . $route;

define('ROUTE', $route);

define('PHP_DIR', $php_dir);

unset($route, $php_dir, $php_self);

require __DIR__ . '/../bootstrap/autoload.php';