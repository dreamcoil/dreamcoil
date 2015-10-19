<?php

define('DREAMCOIL_BOOTSTRAP', microtime(true));

require __DIR__.'/../framework/autoload.php';

require __DIR__.'/../vendor/autoload.php';

$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__.'/../app/Classes/'));

$it->rewind();

while($it->valid()) {

    if (!$it->isDot()) {

        if($it->getSubPathName() != '_config.php'){

            require __DIR__.'/../app/Classes/'.str_replace("\\", "/", $it->getSubPathName());

        }

    }

    $it->next();
}

require __DIR__.'/../app/route.php';