<?php

function conectar()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_registro";
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