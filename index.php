<?php

//DREAMCOIL WEB FRAMEWORK DEVELOPED BY FLORIAN THEIMER
//
//MIT License (MIT)
//
//ENJOY USING IT!


//Get the requested URI
//ROUTE and $varRoute
//
$route = str_replace(str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']);

define('ROUTE',$route);

$varRoute = explode('/', ROUTE);
//

//Setting some variables
//
$DREAMCOIL[] = '';

$DREAMCOIL['view404'] = TRUE;
//

/**
 * @param string $view
 * @param bool $record
 * @return string
 */
function getView($view, $record = TRUE)
{
    global $DREAMCOIL;

    $view = str_replace('.','/',$view);

    $returnView = 'dreamcoil/views/'.$view.'.php';
    if(!file_exists($returnView))
    {


        $directory = 'dreamcoil/views/';

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

            die('Can not find a file matching these arguments: getView("'.$view.'")');

        }

    }

    if($record AND $DREAMCOIL['view404']) $DREAMCOIL['view404'] = FALSE;

    return $returnView;

}
//

/**
 * @param string $view
 * @return string|bool
 */
function view404($view)
{
    global $DREAMCOIL;

    if($DREAMCOIL['view404']) return getView($view, FALSE);

    return FALSE;

}
//

//------------------------------------------------------------
//
//Codebowl
//
//------------------------------------------------------------
//Here are some functions from the Codebowl

/**
 * @param int $length
 * @param string $character
 * @return string
 */
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

        die('This is not a valid string: secret("'.$length.'", "'.$character.'");');

    }

    $randstring = '';

    for ($i = 0; $i < $length; $i++)
    {

        $num = rand(3, strlen($characters) - 6);

        $randstring = $randstring.$characters[$num];

    }

    return $randstring;
}

//Adds the line to the file
//$file string
function addToFile($file)
{

    if(file_exists($file))
    {



    }
    else
    {

        die('Can not find the file: addToFile("'.$file.'")');

    }

}


/**
 * @param array|string $var
 * @return array|string
 */
function htmlEscape($var)
{

    if(is_array($var))
    {

        foreach ($var as $key => $value)
        {

            $var[$key] = str_replace("'","&prime;",htmlspecialchars($value, ENT_QUOTES));

        }

    }
    else
    {

        $var = str_replace("'","&prime;",htmlspecialchars($var, ENT_QUOTES));

    }

    return $var;

}

/**
 * @param string $placeholder
 * @param string $replace
 */
function placeholderReplace($placeholder, $replace)
{

    if(is_array($replace))
    {

        foreach ($replace as $key => $value)
        {

            $placeholder = str_replace('%'.$key.'%', $value, $placeholder);

        }

    }
    else
    {

        die('The replacer isn not an array: placeholderReplace('.$placeholder.', '.$replace.');');

    }

    return $placeholder;

}
//

//Cleares the cache
unset($cache);

/**
 * Preloads the _config.php file
 * Autoloader for files in the following directorys:
 * dreamcoil/app/*
 */

include('dreamcoil/app/_config.php');

$directory = 'dreamcoil/app/';

$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

$it->rewind();

while($it->valid()) {

    if (!$it->isDot()) {

        if($it->getSubPathName() != '_config.php'){

            include($directory.str_replace("\\", "/", $it->getSubPathName()));

        }

    }

    $it->next();
}
//

//Let's get into the views directory!
include('dreamcoil/views/route.php');
