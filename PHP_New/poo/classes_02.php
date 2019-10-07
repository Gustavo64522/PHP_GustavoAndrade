<?php
class Customer {
    public $name;

    public $email;

    public $cpf;

    public $endereco;

    public function __construct($name, $email, $cpf, $endereco = '')
    {
        $this->name = $name;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

}

$client1 = new Customer('Nicolas Andrade', 'nicolasgg@teste.com.br', '51176522291', 'Rua dos Testes');
$client2 = new Customer('Nicolas Andrade', 'nicolasgg@teste.com.br', '51176522291', 'Rua dos Testes');


?>