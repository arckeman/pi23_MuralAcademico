<?php

function conectar()
{
$servidor = "localhost";
$usuario = "2023_info4_pi_mural_academico";
$senha = "mural023";
$banco = "2023_info4_pi_mural_academicoME";
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