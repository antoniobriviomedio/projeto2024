<?php
session_start();

//Verifica se o usuário logou.
require 'acessoadm.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Modelo PHP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/form.css">
<link rel="stylesheet" href="./css/padrao.css">
</head>
<body>

<html>
    <head>
  <meta charset="UTF-8">
</head>
<body>

<h2>Inserir Usuários</h2>

<form action="usuariocadastrar.php" method="post">
  <label for="fname">Nome:</label><br>
  <input type="text" id="fname" name="nome" onfocus="this.value=''" value="insira o nome"><br>
  
   <label for="fname">e-mail:</label><br>  
   <input type="email" name="email" onfocus="this.value=''" value="insira o e-mail">
   

  <label for="lname">Senha:</label><br>
  <input type="password" id="lname" name="senha">
  
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
