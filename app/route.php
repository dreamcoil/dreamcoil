<?php

$route = new Dreamcoil\Route;

if($route->is('/profile/{id}/{name}')) var_dump($route->data);