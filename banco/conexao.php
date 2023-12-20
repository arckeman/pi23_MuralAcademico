<?php

function conectar()
{
$servidor = "localhost";
$usuario = "root";
$senha = "123";
$banco = "codigo_bd";
//$port = 3306

// Create connection
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Check connection
if ($conn->connect_error) {
    die("a conexão falhou!" . $conn->connect_error);
}

return $conn;
}
//echo "Connected successfully";

function desconectar($conn){
    $conn->close();
}
?>