<?php
session_start();

// Definar as credenciais do administrador
$adminEmail = "admin@academiaolimpo.com";
$adminPassword = "omega";

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === $adminEmail && $password === $adminPassword) {

    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;

    // Redirecione para o endpoint do administrador
    header("Location: http://127.0.0.1:8000/admin/adminpage");
    exit;
} else {

    header("Location: /index.php?error=Credenciais inválidas");
    exit;
}
