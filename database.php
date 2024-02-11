<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação das credenciais
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Credenciais válidas
  $response = array('autenticado' => true);
} else {
  // Credenciais inválidas
  $response = array('autenticado' => false);
}

// Retorno da resposta em formato JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
