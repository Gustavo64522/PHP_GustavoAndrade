<?php

    abstract class Animal {

        public function falar() 
        {
            return "Som";
        }
        public function mover() 
        {
            return "Anda";
        }

    }

class Cachorro extends Animal {

    public function falar()
    {
        return "Late";
    }
}

class Gato extends Animal {

    public function falar()
    {
        return "Mia";
    }
}

class Passaro extends Animal {

    public function falar()
    {
        return "Canta";
    }

    public function mover()
    {
        return "Voa e ". parent::mover(); //O THIS se refere ao próprio Objeto e o 
                                          //Parent se refere a Classe Pai. 
    }

}


echo "--------------------<br/>";

$pluto = new Cachorro();
echo "PLUTO<br>";
echo $pluto->falar()."<br/>";
echo $pluto->mover()."<br/>";

echo "--------------------<br/>";
echo "GATO DE BOTAS<br>";
$gatodebotas = new Gato();
echo $gatodebotas->falar()."<br/>";
echo $gatodebotas->mover()."<br/>"; 

echo "--------------------<br/>";
echo "PICA-PAU<br>";
$picapau = new Passaro();
echo $picapau->falar()."<br/>";
echo $picapau->mover()."<br/>";

?>