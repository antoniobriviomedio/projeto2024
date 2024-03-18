<?php
session_start();

//Verifica se o usuário logou.
require 'acessoadm.php';

//Insere o arquivo de conexão
require('conexao.php');

//Cria variáveis para o campos do Formulário
$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);

//Cria um hash da senha
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

//Todo o usuário que se cadastrar terá acesso comum.
$acesso = 'Usuário';

//Todo o usuário cadastrado no site deve validar o e-mail
$status = 'aguardando';

//Código que usuário deve retornar para validar o e-mail
$validador = rand(100000000,999999999);

try {
//SQL para inserir o Usuário no BD
  $sql = "INSERT INTO usuarios(nome, email, senha, acesso, status, validador)
  VALUES ('$nome', '$email', '$senha', '$acesso', '$status', $validador)";

//Executa o SQL
  $conn->exec($sql);
  
//Escreve na tela em caso de sucesso
  echo "Usuário Criado";
  
} catch(PDOException $e) {

//Escreve na tela em caso de erro
  echo $sql . "<br>" . $e->getMessage();
}

//Limpa a conexão criada
$conn = null;
?>