<?php

namespace Source;


interface IServiceProduto
{
    public function lista();
    public function salvar();
    public function atualizar();
    public function deletar();
}