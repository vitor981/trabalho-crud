<?php
require_once './db/actions/cadastrar.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href=".\style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="background-login bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Cadastro</h2>
        <form action="./db/actions/cadastrar.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Nome de Usuário</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome de usuário" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-success w-100" value="cadastrar">Cadastrar</button>
            <div class="text-center mt-3">
                <a href="login.php">Já tem uma conta? Faça login</a>
            </div>
        </form>
        <a href="index.html" class="btn btn-secondary mt-3">Voltar para a Página Principal</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
