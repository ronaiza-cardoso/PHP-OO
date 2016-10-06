<?php

require_once "Product.php";
//Buscando a classe para ser usada

$db = new \PDO("mysql:host=localhost;bdname=projetooo", "root", "");
//Conecção com o banco de dados

$produto = new Produto($db);
//conecção está indo como parâmetro para o nosso contrutor do produto

$list = $produto->lista();



var_dump($list);