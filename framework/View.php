<?php

namespace Dreamcoil;

class View
{

    private $viewFolder;

    /**
     * Class constructor
     */
    public function __construct()
    {

        $this->viewFolder =  __DIR__ . '/../app/Views/';

    }


    /**
     * Returns the path to a view
     *
     * @param $view
     * @param $view boolean
     * @return mixed
     */
    private function getPath($view, $reverse = FALSE)
    {

        if($reverse) return str_replace('/','.',$view);

        return str_replace('.','/',$view);

    }


    /**
     * @param $path
     * @return mixed|string
     */
    private function getFile($path)
    {

        $returnView = $this->viewFolder . $path . '.php';

        if(!file_exists($returnView))
        {

            $it = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->viewFolder));

            while ($it->valid())
            {

                if (!$it->isDot())
                {



                    $cache['SelectView'] = strrev($path);

                    $cache['SelectView'] = explode("/", $cache['SelectView'])[0];

                    $cache['SelectView'] = strrev($cache['SelectView']);


                    $cache['ReturnView'] = explode(".", $it->key());

                    unset($cache['ReturnView'][count($cache['ReturnView']) - 1]);

                    $cache['ReturnView'] = implode('.', $cache['ReturnView']);

                    $cache['ReturnView'] = explode("\\", $cache['ReturnView']);

                    $cache['ReturnView'] = $cache['ReturnView'][count($cache['ReturnView']) - 1];

                    if ($cache['ReturnView'] == $cache['SelectView'])
                    {

                        $returnView = $it->key();

                    }
                }

                $it->next();

            }

            if (!isset($returnView))
            {

                die('Can not find a file matching these arguments: getView("' . $this->getPath($path, TRUE) . '")');

            }

            return $returnView;

        }

    }

    /**
     * Returns a view
     *
     * @param $view
     */
    public function get($view)
    {

        return $this->getFile($this->getPath($view));

    }

    /**
     * Returns a view
     *
     * @param $view
     */
    public function inc($view, $data = array())
    {

        require $this->getFile($this->getPath($view));

    }


}
