
[![Build Status](https://travis-ci.org/dreamcoil/dreamcoil.svg?branch=master)](https://travis-ci.org/dreamcoil/dreamcoil)
![Download count](https://poser.pugx.org/dreamcoil/packagist/d/total.png)
![License](https://poser.pugx.org/dreamcoil/packagist/license)
# Dreamcoil
### PhP framework for smooth people
## Quickstart

1.  Clone the main repo `git clone https://github.com/dreamcoil/dreamcoil.git`
2.  Init the framework `git submodule init`
3.  Install the framework `git submodule update`
4.  Run `composer update` to install all required packages
5.  🎉 Start using Dreamcoil for your projects

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

## Example Layouting

```php

$layout = new \Dreamcoil\Layout('Bruce',['user' => \Model\User::get()]);

```

## Wiki

Do you have some problems with Dreamcoil?
Then I suggest you to have a look at our [wiki](https://github.com/dreamcoil/dreamcoil/wiki)


## Update the Framework

If a new framework version has been release,d run `git submodule foreach git pull origin master` for getting all updates.
