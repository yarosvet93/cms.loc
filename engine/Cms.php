<?php

namespace Engine;

class Cms
{
    /**
     * @var
     */
    private $di;

    public $db;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run Cms
     */
    public function run ()
    {
        print_r($this->di);

    }
}