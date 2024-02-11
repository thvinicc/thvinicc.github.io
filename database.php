<?php
// Dados de conexão
$servername = "db4free.net";
$username = "teste1xa";
$password = "1q2w3e4r";
$dbname = "teste1xa";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida";
?>
