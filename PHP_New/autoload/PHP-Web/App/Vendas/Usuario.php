<?php

namespace App\Vendas;
Class Usuario {
    public function cadastrar ($nome,$idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function imprimir ()
    {
        $r = 'Nome: ' . $this->nome . '<br>';
        $r.= 'Idade: ' . $this->idade . '<br>';

        return $r;
    }

}



?>