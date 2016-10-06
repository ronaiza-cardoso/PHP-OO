<?php

require_once "IConeccao.php";
require_once "Coneccao.php";
require_once "Produto.php";
require_once "Container.php";

$db = Container::geTConeccao();
//obtem a conccao por meio do container

$produto = Container::getProduto();

$list = $produto->lista();

var_dump($list);