<?php

define('DREAMCOIL_BOOTSTRAP', microtime(true));

require __DIR__ . '/../framework/autoload.php';

if('FRAMEWORK' == 0) exit("The submodule need to be installed.\nRun 'git submodule init' and 'git submodule update' for loading the framework.");

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

require __DIR__.'/../app/route.php';