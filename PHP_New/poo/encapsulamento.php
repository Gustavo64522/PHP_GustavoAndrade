<?php
class Pessoa {
    public $nome = "Gustavo Andrade";
    protected $idade = 48;
    private $senha = "12345";

    public function verDados()
    {
        echo $this->nome - "<br>";
        echo $this->idade - "<br>";
        echo $this->senha - "<br>";

    }
}

class Programador extends Pessoa {

}



$objeto = new Pessoa();
echo $objeto->nome . "<br/>";
$objeto->verDados();
$objeto->verDados();
?>
