<?php

//DREAMCOIL WEB FRAMEWORK DEVELOPED BY FLORIAN THEIMER
//
//The MIT License (MIT)
//
//ENJOY USING IT!


//Get the requested URI
//ROUTE and $varRoute
//
$route = str_replace(str_replace('index.php', '', $_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']);

$route = '/'.$route;

define('ROUTE',$route);

$varRoute = explode('/', ROUTE);
//

//Setting some variables
//
$DREAMCOIL['view404'] = TRUE;
//


//The getView function
//$view string 
//$record boolean
//
function getView($view, $record = TRUE)
{
	global $DREAMCOIL;

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

	if($record AND $DREAMCOIL['view404']) $DREAMCOIL['view404'] = FALSE;

	return $returnView;

}
//

//Returns the 404 error page path
//$view string
//
function view404($view)
{

	if($DREAMCOIL['view404']) return getView($view);

}
//

//------------------------------------------------------------
//
//Codebowl
//
//------------------------------------------------------------
//Here are some functions from the Codebowl

//Generates a random string
//$length string
//$charachter string
//
function secret($length, $character = 'Messner')
{

    if($character == 'Messner')
    {

    	$characters = '1234567890qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM';

    }
    else if(is_string($character))
    {

    	$characters = $character;

    }
    else
    {

    	echo 'This is not a valid string: secret("'.$length.'", "'.$character.'");';

    	die();

    }

    $randstring = '';

    for ($i = 0; $i < $length; $i++) 
    {

    	$num = rand(3, strlen($characters) - 6);

    	$randstring = $randstring.$characters[$num];

    }

    return $randstring;
}
//

//Cleares the cache
unset($cache);

//Let's get into the views directory!
include('views/route.php');
