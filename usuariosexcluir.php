<?php
session_start();

//Verifica se o usuário logou.
require 'acessoadm.php';

//Insere o arquivo de conexão
require('conexao.php');

//Cria variáveis para o campos do Formulário
$id = $_GET['id'];

//SQL para inserir o Usuário no BD
$sql = "delete from usuarios where id=:id";

try {

$result = $conn->prepare($sql);
 
//Definição de parâmetros
$result->bindParam(":id", $id, PDO::PARAM_STR);
	
//Executa o SQL	
$result->execute();

//Escreve na tela em caso de sucesso
echo "Usuário Apagado";
  
} catch(PDOException $e) {

//Escreve na tela em caso de erro
echo $sql . "<br>" . $e->getMessage();
}

//Limpa a conexão criada
$conn = null;
?>