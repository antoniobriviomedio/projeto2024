<?php
//Inicia a sessão
session_start();

//Se o usuário não usou o formulário
if (!isset($_POST['senha'])){
    header('Location: index.html'); //Redireciona para o form
    exit; // Interrompe o Script
}

// Dados do Formulário
$campoemail = $_POST['email'];
$camposenha = $_POST['senha'];

//Faz a conexão com o BD.
require 'conexao.php';

//Cria o SQL (consulte tudo na tabela usuarios com o email digitado no form)
$sql = "SELECT * FROM usuarios where email=:email";

try
{

	$result = $conn->prepare($sql);
 
	//Definição de parâmetros
	$result->bindParam(":email", $campoemail, PDO::PARAM_STR);
	
    //Executa o SQL	
	$result->execute();
 
    if ($result->rowCount()>0){
 
    	foreach($result as $row)
    	{
			$verificado = password_verify($camposenha, $row["senha"]);
			if($verificado){			
				$_SESSION['nome'] = $row["nome"];
				$_SESSION['acesso'] = $row["acesso"];
				header('Location: principal.php');
				exit;
			}else{
			//Senha errada	
			  header( "refresh:5;url=index.html" ); 
				exit;  
			}
    	}



	//Email não existe na base. 	
    }	else {
		header('Location: index.html'); //Redireciona para o form
		exit; // Interrompe o Script
	}
	
    //Desconectar com BD	
    $conn = null;	
}
catch(PDOException $erro)
{
	echo $erro->getMessage();
}

?> 