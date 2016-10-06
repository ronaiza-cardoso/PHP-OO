<?php

require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

$container['data'] = function (){
    return new \DateTime();
};

var_dump($container['data']);