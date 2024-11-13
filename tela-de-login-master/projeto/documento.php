<?php
// documento.php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redireciona para a página de login se não estiver logado
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento PDF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="document-container">
        <h2>Bem-vindo, Thauane Oliveira!</h2>
        <p>Abaixo está o documento PDF:</p>
        <a href="Resultado0096047-20241112062227.pdf" download="Resultado0096047-20241112062227.pdf">Baixar resultado</a>
        <br><br>
        <form action="index.html" method="post">
            <button type="submit">Sair</button>
    </form>
    </div>

</body>
</html>
