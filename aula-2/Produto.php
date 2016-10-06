<?php


class Produto
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function lista()
    {
        $query = "SELECT * FROM produto";

        $stmt = $this->db->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}