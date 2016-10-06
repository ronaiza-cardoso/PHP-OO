<?php


class Container
{
    public static function getProduto()
    {
        return new Produto();
    }

    public  static function geTConeccao()
    {
        return new Coneccao();
    }

    //quando o método é estático é possivel utilizar sem precisar instancia
}