<?php

namespace App\Estoque;
Class Produto 
{
    public $id, $descricao, $qtd;

    public function cadastar($id, $descricao, $qtd)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->qtd = $qtd;
    }

    public function imprimir ()
    {
        $r = 'Produto id: ' . $this->id . '|';
        $r.= 'Descrição: ' . $this->descricao . '<br>';
        $r.= 'Quantidade: ' . $this->qtd . '<br>';

        return $r;
    }   

}


?>