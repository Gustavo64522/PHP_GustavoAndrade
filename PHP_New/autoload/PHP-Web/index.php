<?php
use App\Vendas\Usuario ;
use App\Vendas\Produto_Vendas;
use App\Vendas\Compra ;
use App\Estoque\Estoque;


require_once 'vendor/autoload.php';

$u = new Usuario();
$u->cadastrar('Gustavo',18);


$p1 = new Produto_Vendas();
$p2 = new Produto_Vendas();    

$p1->cadastrar('1','Produto1');
$p2->cadastrar('2','Produto2');

$c = new Compra ();

$c->cadastrar(
    array(
            'p1' => $p1,
            'p2' => $p2
        ), $u
);

echo $c->imprimir();

$e = new Estoque;
echo $e->getTotal();
?>