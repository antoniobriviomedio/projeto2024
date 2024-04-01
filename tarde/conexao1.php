<?php
//Onde está o servidor de BD
$servername = "localhost";
//Nome e Senha do usuário criado no BD
$username = "id21898784_cliente";
$password = "Abcdef1!";
//Nome do Banco de Dados
$dbname = "id21898784_site2024";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando a conexão
if ($conn->connect_error) {
  die("Você se deu mal: " . $conn->connect_error);
}
?>