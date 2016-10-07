<?php



$container['conn'] = function ($c) {
    return new \Source\Coneccao($c['dsn'], $c['user'], $c['pass']);
};


$container['produto'] = function(){
    return new \Source\Produto;
};

$container['ServiceProduto'] = function ($c){
    return new \Source\ServiceProduto($c['conn'], $c['produto']);
};
