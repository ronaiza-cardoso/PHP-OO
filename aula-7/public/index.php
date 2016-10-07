<?php

require_once "../vendor/autoload.php";

use Pimple\Container;


$container = new Container();

$container['conn'] = function () {
    return new \Source\Coneccao("mysql:host=localhost;dbname=projetooo", "root", "");
};


$container['product'] = function($c){
    return new \Source\Produto($c['conn']);
};

$list = $container['product']->lista();

var_dump($list);