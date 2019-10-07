<?php
$conn = new mysqli("localhost","root", "SuaSenha", "dbphp7" ); #IP , USUARIO, SENHA_USUARIO, Banco
if ($conn->connect_error) {
    echo "Error: ".$conn->connect_error;
exit;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);
$login = "user08";
$pass = "12345";
$stmt->execute();
?>