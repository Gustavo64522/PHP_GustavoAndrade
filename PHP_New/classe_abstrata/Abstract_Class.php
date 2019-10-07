<?php


interface Veiculo {

    public function acelerar ($velocidade);
    public function frenar ($velocidade);
    public function trocarMarcha ($marcha);

}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade_GTR)
    {
        echo "O automovel acelerou até ".$velocidade_GTR."km/h.";
    }

    public function frenar($velocidade_GTR)
    {
        echo "O automovel frenou até ".$velocidade_GTR."km/h .";
    }

    public function trocarMarcha($marcha)
    {
        echo "O automovel trocou para a marcha.". $marcha;
    }

}

#Uma classe abstrata não pode ser estanciada.
class Lamborghini extends Automovel {

    public function pilotoAutomatico()
    {

    }
}

$carro = new Lamborghini();
$carro->acelerar(360);

?>