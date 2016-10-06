<?php

$db = new \PDO("mysql:host=localhost;bdname=projetooo", "root", "");
//Conecção com o banco de dados

$query = "SELECT * FROM produto";
//Query selecionando os produtos

$stmt = $db->prepare($query);
//Prepara a conecção

$stmt->execute();
//Executando a query

$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);
//Tras array associativo


var_dump($list);