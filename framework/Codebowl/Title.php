<?php

namespace Dreamcoil\Codebowl;


class Title
{
    private $title, $append, $prepend;
    public $prefix, $suffix;

    /**
     * Defines the prefix and suffix
     *
     * @param string $prefix Prefix
     * @param string $suffix Suffix
     */
    public function __construct($prefix = ' &raquo; ', $suffix = ' &bull; ')
    {

        $title = 'Dreamcoil';

        $this->title = $title;

        $this->prefix = $prefix;

        $this->suffix = $suffix;

    }

    /**
     * Get your title
     *
     * @return mixed
     */
    public function get()
    {

        $title = $this->title;

        if(isset($this->prepend)) $title = $this->prepend . $this->prefix . $title;

        if(isset($this->append)) $title .= $this->suffix . $this->append;

        return $title;

    }

    /**
     * Set your title
     *
     * @param $title
     */
    public function set($title)
    {

        $this->title = $title;

    }

    /**
     * Append a text to your title
     *
     * @param $append
     */
    public function append($append)
    {

        $this->append = $append;

    }

    /**
     * prepend a text to your title
     *
     * @param $prepend
     */
    public function prepend($prepend)
    {

        $this->prepend = $prepend;

    }

}
