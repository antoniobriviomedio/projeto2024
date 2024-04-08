<?php
session_start();

//Insere o arquivo de conexão
require('conexao.php');

//Verifica se o usuário logou.
require 'acessoadm.php';

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

//SQL para inserir o Usuário no BD
  $sql = "INSERT INTO usuarios(nome, email, senha, acesso, status, validador)
  VALUES (:nome, :email, :senha, :acesso, :status, :validador)";


try {

$result = $conn->prepare($sql);
 
//Definição de parâmetros
$result->bindParam(":nome", $nome);
$result->bindParam(":email", $email);
$result->bindParam(":senha", $senha);
$result->bindParam(":acesso", $acesso);
$result->bindParam(":status", $status);
$result->bindParam(":validador", $validador);
	
//Executa o SQL	
$result->execute();

//Envie email para validar a conta.
require 'enviaremail.php';  

//Conteúdo do email de validação
$texto = "Clique <a href='aulahtmlcss.000webhostapp.com/usuariovalidaremail.php?id=" . $email . "&validador=" . $validador . "'>aqui</a>.";

enviaremail($camponome, $campoemail, 'Validar conta', $texto);

//Escreve na tela em caso de sucesso
  echo "Usuário Criado";
  
} catch(PDOException $e) {

//Escreve na tela em caso de erro
  echo $sql . "<br>" . $e->getMessage();
}

//Limpa a conexão criada
$conn = null;
?>