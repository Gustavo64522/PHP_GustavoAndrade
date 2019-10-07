<?php
class Pessoa { //Classe

    public $nome; //Atributo  

public function falar(){ //Método
    return "Eu vou jogar uma partida com o ".$this->nome.".";

    }  
public function reclamar() {
    return "Ja matei o ".$this->nome.", umas MIL vezes kkkk";
    }
}


$gustavo = new Pessoa();
$gustavo->nome = "Gustavo";
$nicolas = new Pessoa();
$nicolas->nome = "Nicolas";


echo $gustavo->falar();
echo "<br>";
echo $nicolas->reclamar();
?>