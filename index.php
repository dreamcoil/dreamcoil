<?php

$route = str_replace(str_replace('index.php', '', $_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']);

$route = '/'.$route;

define('ROUTE',$route);

define('VIEW404', TRUE);

$varRoute = explode('/', ROUTE);

function getView($view, $record = TRUE)
{

	$view = str_replace('.','/',$view);

	$returnView = 'views/'.$view.'.php';
	if(!file_exists($returnView))
	{


		$directory = 'views/';

		$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

		while($it->valid())
		{

		    if (!$it->isDot())
			{

				$cache['SelectView'] = strrev($view);

				$cache['SelectView'] = explode("/", $cache['SelectView'])[0];

				$cache['SelectView'] = strrev($cache['SelectView']);


		        $cache['ReturnView'] = explode(".", $it->key());

				$cache['ReturnView'] = strrev($cache['ReturnView'][0]);

				$cache['ReturnView'] = explode("\\", $cache['ReturnView'])[0];

				$cache['ReturnView'] = strrev($cache['ReturnView']);


				if($cache['ReturnView'] == $cache['SelectView'])
				{

					$returnView = $it->key();

				}
		    }

		    $it->next();

		}



		if(!isset($returnView))
		{

			echo 'Can not find a file matching these arguments: getView("'.$view.'")';

			die();

		}

	}

	if($record AND VIEW404) define('VIEW404',FALSE);

	return $returnView;

}

function view404($view)
{

	if(VIEW404) return getView($view);

}

unset($cache);

include('views/route.php');
