<?php

//FILLED WITH EXAMPLE DATA

$route = new Dreamcoil\Route;

$view = new Dreamcoil\View;

if($route->is('/hello')) $view->inc('welcome.hello');

if($route->is('/profile/{id}/{name}')) echo 'Hey, ' . $route->data['name'];

if($route->is('/test') or $route->is('/session')) App\ExampleClass::called();

if($route->group('profile'))
{

    if($route->is('view')) echo 'view';

    if($route->is('edit')) echo 'edit';

}
