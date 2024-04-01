<?php
session_start();

//Cria variáveis com a sessão.
$logado = $_SESSION['nome'];

//Verifica o acesso.
require 'acessoadm.php';

//Faz a conexão com o BD.
require 'conexao.php';

//Cria o SQL com limites de página ordenado por id
$sql = "SELECT * FROM usuarios ORDER BY id";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Tela Principal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/tabela.css">
<link rel="stylesheet" href="./css/menu.css">
<link rel="stylesheet" href="./css/padrao.css">
</head>
<body>

<div class="topnav">
    
<?php
//Coloca o menu que está no arquivo
include 'menu.php';
?>

</div>

<div class="content">


			<h1>Lista de Usuários</h1>
			<table>
<tr><th>Id</th><th>Nome</th><th>Email</th><th>Acesso</th><th>Status</th><th colspan="3">Ações</td></tr>


<?php

try
{
	$result = $conn->prepare($sql);
 
    //Executa o SQL	
	$result->execute();
 
    if ($result->rowCount()>0){
 
    	foreach($result as $row)
    	{
    	    $id=$row["id"];
    	    $nome=$row["nome"];
    	    $email=$row["email"];
    	    $acesso=$row["acesso"];
    	    $status=$row["status"];
    	    
		    echo "<tr><td>$id</td><td>$nome</td><td>$email</td><td>$acesso</td><td>$status</td><td><a href='usuariosexcluir.php?id=$id'><img src='./imagens/excluir.png'></a></td></tr>";
    	}

	//Se a consulta não tiver resultados 	
    }	else {
		echo "<h1>Nenhum resultado foi encontrado.</h1>";
	}
	
    //Desconectar com BD	
    $conn = null;	
}
catch(PDOException $erro)
{
	echo $erro->getMessage();
}


?>
</table>
            <a href="usuariocadastrartela.php"><img src="./imagens/incluir.png" alt="Incluir Usuário"></a>
</div>

    </div>
<div class="footer">
  <p>Projeto Final</p>
</div>

</body>
</html>

