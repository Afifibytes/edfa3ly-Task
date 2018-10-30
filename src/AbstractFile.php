<?php

namespace App;

abstract class AbstractFile implements Consumable
{

    //Common File Functionality

    protected $path;
    /**
     * AbstractFile constructor.
     * @param $path
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    public abstract function processFile();

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->processFile();
    }

}