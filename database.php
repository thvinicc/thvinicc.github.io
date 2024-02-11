<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Aqui você pode realizar a validação do nome de usuário e senha
    // Por exemplo, verificar em um banco de dados

    // Redireciona o usuário após o login bem-sucedido
    header("Location: https://www.anunciarbr.net");
    exit();
}
?>
