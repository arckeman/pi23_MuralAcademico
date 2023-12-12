<?php
//https://www.w3schools.com/php/php_mysql_connect.asp

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codigo_bd";
//$port = 3306

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("a conexão falhou!" . $conn->connect_error);
}

return $conn;

//echo "Connected successfully";

function desconectar($conn){
    $conn->close();
}
?>