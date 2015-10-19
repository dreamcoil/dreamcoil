<?php

namespace App;

class ExampleClass
{


    public function called()
    {

        $view = new \Dreamcoil\View();

        $view->get('welcome.hello');
    }

}