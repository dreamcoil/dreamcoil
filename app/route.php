<?php

$route = new Dreamcoil\Route;

$view = new Dreamcoil\View;

if($route->is('/hello')) $view->get('welcome.hello');

if($route->is('/profile/{id}/{name}')) echo 'Hey, ' . $route->data['name'];

if($route->is('/test')) App\ExampleClass::called();

if($route->group('profile'))
{

    if($route->is('view')) echo 'view';

    if($route->is('edit')) echo 'edit';

}
