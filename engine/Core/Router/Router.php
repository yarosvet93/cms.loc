<?php

namespace \Engine\Core\Router;

class Router
{

    private $routes = [];
    private $host;


    public function __construct($host)
    {
        $this->host = $host;
    }
}