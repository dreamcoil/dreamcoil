<?php

namespace Dreamcoil;

class Route
{

    public $data;

    /**
     * @return string
     */
    public function get()
    {

        return ROUTE;

    }

    public function getArgs()
    {

        return explode('/',$this->get());

    }

    /**
     * @param $to
     */
    public function set($to)
    {

        header('Location: ' . substr(PHP_DIR, 0, -1) . $to);

    }

    /**
     * @param $route
     * @return bool
     */
    public function is($route)
    {

        if(preg_match_all("/{?[a-zA-Z0-9_]{1,}}/", $route, $variables))
        {

            $argv = explode('/',$route);

            if(count($argv) == count($this->getArgs()))
            {

                $i = 0;

                foreach($argv as $var)
                {

                    if($var == $this->getArgs()[$i])
                    {
                        $return = false;
                    }
                    else
                    {

                        $var_name = str_replace(array('{','}'),array('',''), $var);

                        $data[$var_name] = $this->getArgs()[$i];

                        $return = true;

                    }


                    $i++;

                }

                if(!$return)
                    return false;
                elseif($return)
                {

                    $this->data = $data;

                    return true;

                }

            }
            else
                return false;

        }

        if($this->get() == $route) return true;

        return false;

    }


}