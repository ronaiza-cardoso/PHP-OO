<?php

require_once "Produto.php";

$db = new \PDO("mysql:host=localhost;bdname=projetooo", "root", "");
//Conecção com o banco de dados

$produto = new Produto($db);

$list = $produto->lista();

var_dump($list);