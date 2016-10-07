<?php
/**
 * Created by PhpStorm.
 * User: ronaiza
 * Date: 07/10/16
 * Time: 09:27
 */

namespace Source;


interface IProduto
{
     public function getId();
     public function setId($id);

    public function getNome();
    public function setNome($nome);

    public function getDescricao();
    public function setDescricao($escricao);

}