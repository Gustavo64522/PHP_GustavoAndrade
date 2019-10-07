<?php
$conn = new mysqli("localhost","root", "SuaSenha", "dbphp7" ); #IP , USUARIO, SENHA_USUARIO, Banco
if ($conn->connect_error) {
    echo "Error: ".$conn->connect_error;

}
$result = $conn->query("SELECT * FROM  tb_usuarios ORDER BY deslogin");


while ($row = $result->fetch_assoc()) {
    
    var_dump($row); 
    }
?> 