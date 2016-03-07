<?php

define('DREAMCOIL_BOOTSTRAP', microtime(true));

if(!isset($_SERVER['REQUEST_URI'])) $_SERVER['REQUEST_URI'] = '';

if(!isset($_SERVER['SERVER_NAME'])) $_SERVER['SERVER_NAME'] = 'localhost';


if(!file_exists(__DIR__ . '/../framework/autoload.php')) die("The framework must be loaded<br><a href='https://github.com/dreamcoil/dreamcoil#quickstart'>See Quickstart</a>");

require __DIR__ . '/../framework/autoload.php';

require __DIR__.'/../vendor/autoload.php';

$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__.'/../app/Classes/'));

$it->rewind();

while($it->valid()) {

    if (!$it->isDot()) {

            require __DIR__.'/../app/Classes/'.str_replace("\\", "/", $it->getSubPathName());

    }

    $it->next();
}

$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__.'/../app/Models/'));

$it->rewind();

while($it->valid()) {

    if (!$it->isDot()) {

        require __DIR__.'/../app/Models/'.str_replace("\\", "/", $it->getSubPathName());

    }

    $it->next();
}

if(!isset($console)) $console = true;

if($console) return;

require __DIR__.'/../app/route.php';
