<?php
class Carro {
    private $modelo;
    private $motor;
    private $ano;


public function getModelo() {
    return $this->modelo;
    } 
    
public function setModelo($modelo) {
    $this->modelo = $modelo;
}    

public function getMotor():float {
    return $this->motor;
}

public function setMotor($motor) {
    $this->motor = $motor;
}

public function getAno():int {
    return $this->ano;

}

public function setAno($ano) {
    $this->ano = $ano;
}

public function exibir() {
    return array(
        "modelo" =>$this->getModelo(),
        "motor" =>$this->getMotor(),
        "ano" =>$this->getAno()  
    );

    }//Fexhando o método exibir()
}//Fechanndo a classe Carro

$golf = new Carro;
$golf->setModelo("GTI");
$golf->setMotor("2.0");
$golf->setAno("2018");

$jetta = new Carro;
$jetta ->setModelo("GLI");
$jetta->setMotor("2.0");
$jetta->setAno("2019");


var_dump($golf->exibir())
?>