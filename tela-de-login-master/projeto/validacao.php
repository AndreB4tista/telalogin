<?php
// validacao.php
session_start();

// Exemplo de credenciais para validação
$usuario_valido = "130.350.586-01";
$senha_valida = "130.350.586-01";

// Verifica se os campos do formulário foram preenchidos
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Obtém os dados do formulário e sanitiza
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // Valida o usuário e a senha
    if ($username === $usuario_valido && $password === $senha_valida) {
        // Define a sessão como logada
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        // Redireciona para a página do documento
        header("Location: documento.php");
        exit;
    } else {
        // Redireciona de volta para o login com uma mensagem de erro
        header("Location: index.html?error=1");
        exit;
    }
} else {
    // Redireciona de volta para o login se os dados não estiverem completos
    header("Location: index.html?error=1");
    exit;
}
?>
