<?php

$route = new Dreamcoil\Route;

if($route->is('/profile/{id}/{name}')) echo 'Hey, ' . $route->data['name'];