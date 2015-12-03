# :sparkles: Version 1.2 :sparkles:
---
# Dreamcoil
### PhP framework for smooth people
## Quickstart

1.  [Get it!](https://github.com/xolf/dreamcoil/archive/master.zip)
2.  Unzip the files in a directory
3.  Collect all framework files with `git submodule init` and `git submodule update`
4.  Run `composer update` to install all required packages 
5.  Start using Dreamcoil for your projects

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

$layout = new \Dreamcoil\Layout('Bruce',array('user' => \Model\User::get()));

```

## Wiki

Do you have some problems with Dreamcoil? 
Then I suggest you to have a look at our [wiki](https://github.com/xolf/dreamcoil/wiki)


## Update the Framework

If a new framework version has been release,d run `git submodule foreach git pull origin master` for getting all updates.
