<?php
/**
 * Created by PhpStorm.
 * User: ronaiza
 * Date: 07/10/16
 * Time: 09:16
 */

namespace Source;


class ServiceProduto implements IServiceProduto
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

    public function salvar()
    {
        // TODO: Implement salvar() method.
    }

    public function atualizar()
    {
        // TODO: Implement atualizar() method.
    }

    public function deletar()
    {
        // TODO: Implement deletar() method.
    }
}