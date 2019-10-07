<?php

interface Veiculo {

    public function acelerar ($velocidade);
    public function frenar ($velocidade);
    public function trocarMarcha ($marcha);

}
class Corolla implements Veiculo{

    public function acelerar ($velocidade_corolla)
    {
        echo "O Corolla acelerou até ". $velocidade_corolla."km/h.";
    }

    public function frenar($velocidade_corolla)
    {
        echo "O corrolla frenou até " .$velocidade_corolla. "km/h.";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo trocou para a marcha " . $marcha;
    }
}


class NissanGTR implements Veiculo {

    public function acelerar($velocidade_GTR)
    {
        echo "O GTR acelerou até ".$velocidade_GTR."km/h.";
    }

    public function frenar($velocidade_GTR)
    {
        echo "O GTR frenou até ".$velocidade_GTR."km/h .";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo trocou para a marcha.". $marcha;
    }

}


$carro = new Corolla;
$carro->trocarMarcha(1);
echo"<br>";
$carro2 = new NissanGTR;
$carro2->acelerar(120)
?>