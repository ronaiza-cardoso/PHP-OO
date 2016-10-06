<?php

require_once "../vendor/autoload.php";

$db = Container::geTConeccao();
//obtem a conccao por meio do container

$produto = Container::getProduto();

$list = $produto->lista();

var_dump($list);