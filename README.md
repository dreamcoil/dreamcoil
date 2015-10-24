[![Build Status](https://travis-ci.org/xolf/dreamcoil.svg?branch=1.2)](https://travis-ci.org/xolf/dreamcoil)

# Dreamcoil
### PhP framework for smooth people
## Quickstart

1.  [Get it!](https://github.com/xolf/dreamcoil/archive/master.zip)
2.  Unzip the files in a directory
3.  Run `composer update` to install all required packages 
4.  Start using Dreamcoil for your projects

## Example Routing

```php

if($route->group('profile'))
{

    if($route->is('view')) App\UserController::view();

    if($route->is('{id}')) App\UserController::view($route->data['id']);

    if($route->is('edit')) App\UserController::edit();

}

if($route->is('/post/{hash}')) App\PostController::view($route->data['hash']);

```

## Wiki

Do you have some problems with Dreamcoil? 
Then I suggest you to have a look at our [wiki](https://github.com/xolf/dreamcoil/wiki)
