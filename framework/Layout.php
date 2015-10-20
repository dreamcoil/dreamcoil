<?php

namespace Dreamcoil;

class Layout
{
    private $layout, $data, $view;

    public function __construct($layout, $data = array())
    {

        $this->view = new \Dreamcoil\View();

        $this->layout;

        $this->data = $data;

        $this->view->inc('layouts.' . $this->layout . 'head', $this->data);

    }

    public function __destruct()
    {

        $this->view->inc('layouts.' . $this->layout . 'foot', $this->data);

    }

}
