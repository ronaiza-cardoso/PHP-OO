<?php

namespace Source;


class Produto
{
    private $db;

    public function __construct(IConeccao $db) //essa clase recebe o objeto $db sem saber do que se trata, por isso iremos adicionar uma classe para que o tipo a receber seja forçado.
    {
        $this->db = $db->coneccao();
    }

    public function lista()
    {
        $query = "SELECT * FROM produto";

        $stmt = $this->db->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}