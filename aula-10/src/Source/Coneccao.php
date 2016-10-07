<?php

namespace Source;

class Coneccao implements IConeccao
{

    private $dsn;
    private $user;
    private $pass;

    public function __construct($dsn, $user, $pass)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function coneccao()
    {
        $db = new \PDO($this->dsn , $this->user, $this->pass);
    }
}