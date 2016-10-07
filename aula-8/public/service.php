<?php



$container['conn'] = function ($c) {
    return new \Source\Coneccao($c['dsn'], $c['user'], $c['pass']);
};


$container['product'] = function($c){
    return new \Source\Produto($c['conn']);
};
