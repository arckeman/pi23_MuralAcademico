<?php

function conectar()
{
$servidor = "localhost";
$usuario = "2023_info4_pi_mural_academico";
$senha = "mural023";
$banco = "2023_info4_pi_mural_academico";

$conn = new mysqli($servidor, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("a conexão falhou!" . $conn->connect_error);
}

return $conn;
}

function desconectar($conn){
    $conn->close();
}
?>