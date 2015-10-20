<?php

//EXAMPLE FILE

namespace App;

class ExampleClass
{


    public function called()
    {

        $title = new \Dreamcoil\Codebowl\Title;

        $title->set('Dreamcoil');

        $title->append('Home');

        $layout = new \Dreamcoil\Layout('Bubo',array('title' => $title->get(), 'time' => time()));

        echo "We're going to miss you Dreamcoil v1";

        \App\ZuseClass::test();

        \Models\UserModel::getData();

    }

}