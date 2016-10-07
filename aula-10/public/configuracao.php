<?php

use Pimple\Container;


$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=projetooo";
$container['user'] = "root";
$container['pass'] = "";