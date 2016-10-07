<?php

require_once "../vendor/autoload.php";
require_once "configuracao.php";
require_once "service.php";

$list = $container['product']->lista();

var_dump($list);