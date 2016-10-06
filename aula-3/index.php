<?php

require_once "IConeccao.php";
require_once "Coneccao.php";
require_once "Produto.php";

$db = new Coneccao("mysql:host=localhost;dbname=projetooo", "root", "");
//Conecção com o banco de dados

$produto = new Produto($db);

$list = $produto->lista();

var_dump($list);