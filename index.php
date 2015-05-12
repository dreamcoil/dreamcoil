<?php

$route = str_replace(str_replace('index.php', '', $_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']);

$route = '/'.$route;

define('ROUTE',$route);

define('VIEW404', TRUE);

$varRoute = explode('/', ROUTE);

function getView($view, $record = TRUE){

	$view = str_replace('.','/',$view);

	return 'views/'.$view.'.php';

	if($record) define('VIEW404',FALSE);

}

function view404($view)
{

	if(VIEW404) return getView($view);

}

include('views/route.php');