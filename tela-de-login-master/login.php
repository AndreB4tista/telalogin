<?php
// validacao.php

// Exemplo de credenciais para validação
$usuario_valido = "admin";
$senha_valida = "1234";

// Obtém os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Valida o usuário e a senha
if ($username === $usuario_valido && $password === $senha_valida) {
    echo "Login bem-sucedido! Bem-vindo, $username.";
} else {
    echo "Usuário ou senha incorretos. Tente novamente.";
}
?>
