  <?php
require("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
//$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

try {
  $sql = "INSERT INTO usuarios(nome, email, senha)
  VALUES ('$nome', '$email', '$senha')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 