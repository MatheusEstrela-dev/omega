<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel de Administração - Academia Olimpo</title>
</head>
<body>
    <h1>Bem-vindo ao Painel de Administração</h1>
    <p>Olá, <?php echo htmlspecialchars($_SESSION['email']); ?>!</p>
    <a href="logout.php">Sair</a>
</body>
</html>
