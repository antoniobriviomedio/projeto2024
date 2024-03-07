<?php
//Onde está o servidor de BD
$servername = "localhost";
//Nome e Senha do usuário criado no BD
$username = "id21898784_cliente";
$password = "Abcdef1!";
//Nome do Banco de Dados
$dbname = "id21898784_site2024";

try {
//Cria objeto conexão baseado nos parâmetros acima
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Escreve na tela caso a conexão funcione
//echo "Tudo Ok";
} catch(PDOException $e) {
//Escreve na tela em caso de erro
//echo "Deu ruim: " . $e->getMessage();
}
?>