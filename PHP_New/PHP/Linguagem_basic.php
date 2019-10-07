	<?php
	#_--------------------------------------------------------------------------------------------
	echo "<hr>VARIÁVEIS -<br><br>";
	/*
		Variáveis 
	*/	
	$nome = "Gustavo Silva Andrade";
	$idade = 18;
	$altura = 1.65;

	echo "Meu nome é $nome<br>, tenho $idade anos e tenho $altura de altura.";
	
#_--------------------------------------------------------------------------------------------
echo "<hr>ARRAYS -<br><br>";

/*
	Array same to Lista, and "if" simple. 
*/
$carros = array("Gol", "Fox", "Celta", "i30");
var_dump($carros, "<hr>");	
if(is_array($carros)):
	echo "É um array !!!";
else:
	echo "Não é um array !!!";
endif;
echo '<br>';

#------OU-------------

$frutas = ["Banana", "Maçã", "Uva", "Abacaxi"];
var_dump($frutas, "<hr>");	
if(is_array($frutas)):
	echo "É um array !!!";
else:
	echo "Não é um array !!!";
endif;

echo "<hr>FUNÇÃO -<br><br>";
#_--------------------------------------------------------------------------------------------
/*
	Função GLOBAL
*/
$dog = 'Nino';
function exibedog() {
	GLOBAL $dog; #Se a variável for definida fora da função é nescessário definir ela como GLOBAL
	echo $dog;
}
echo "O nome do meu cachorro é: ";
exibedog();
echo "<hr>";

#_--------------------------------------------------------------------------------------------
/*
	Função GLOBALS 
*/

echo "A soma do array GLOBALS é : <br>";
$a = 5;  
$b = 10;
$c = 2;

function soma() {
	echo $GLOBALS['a'] + $GLOBALS['b'] +  $GLOBALS['c']; 
	#Permite a utilização de n variáveis criadas fora da função 
}
soma();
echo '<hr>';

#_--------------------------------------------------------------------------------------------
//DEFINE
echo "<hr>DEFINE -<br><br>";

define("NOME", "Gustavo Andrade");
define("IDADE", 18);
define("ALTURA", 1.65);


echo 'Meu nome é: '.NOME.'<br>Minha idade é: '.IDADE.'<br>Minha altura é: '.ALTURA;

#_--------------------------------------------------------------------------------------------
//Utilização de switch Case **Quando você ja sabe as opções que irão vir** ,condições sempre == (igual)
#_--------------------------------------------------------------------------------------------
/*
	for(INICIAL ; FINAL ; INCREMENTO)
*/

echo "<hr>";
echo "<hr>FOR -<br><br>";
for ($i = 0; $i <= 10; 	$i++) {
	echo $i . "<br>";
}

echo "<hr>";

for ($j = 0; $j < 1000; $j += 5) {
	if($j > 100 && $j < 800) continue;
	if($j === 815) break;
	echo $j."<br>";
	}
echo "<hr>";

/*Foreach
O "as" define a variavel que vai receber todos os valores do array
e o foreach
*/
echo "<hr>FOREACH -<br><br>";
$meses = array(
	"Janeiro", "Fevereiro", "Março","Abril"
	,"Maio", "Junho", "Julho", "Agosto","Setembro"
	,"Outubro", "Novembro", "Dezembro" 
);
foreach($meses as $mes) {
	echo "O mês é ".$mes."<br><br>";
}

/*
	Uso de while and Do While **Executa pelo menos uma vez**
*/
echo "<hr>WHILE -<br><br>";
$condicao = true;
while ($condicao) {
	$n = rand(1,10);
	if ($n === 3) {
		echo "É TRÊSSS!!";
		$condicao = false;
	}
echo $n . " ";
}

echo "<br>";
//Funções 
echo "<hr>FUNÇÕES -<br><br>";
echo "<hr>";
function exemplo() {
	echo "Exemplo Criado";
};
exemplo();
echo "<br>";
function exreturn() {
	return "Exemplo return";
}
echo exreturn();

echo "<hr>";


function ola($texto = "Mundo", $local = "SP") {
	return "Olá $texto! bem vindo à $local";
}
echo ola("Gustavo","RJ");
echo "<br>";
echo "<hr>";

$a = 10;
function trocanumero($b) {
	return $b += 50;
}

echo trocanumero($b);
echo "<br>";
echo $a;

?>	
