<?php
include('protect.php');
require_once './db/config/db.php';
require_once './db/actions/editar_usuario.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link href=".\style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="background-login bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Conta</h2>
        <form action="" method="POST">
            <div class="text-center mt-3">
                <p>Bem Vindo ao Painel de Usuário, <?php echo $_SESSION['nome'];?></p>
            </div>
            <div class="text-center mt-3">
            <p> 
                <a href="logout.php">Sair</a>
            </p>
            </div>
            <div class="text-center mt-3">
            <p> 
                <a href="cadastro.php">Cadastrar</a>
            </p>
            </div>
            <div class="text-center mt-3">
            <p> 
                <a href="./db/public/editar.php?idusuario=<?= $_SESSION['id'] ?>">Editar</a>
            </p>
            </div>
            <div class="text-center mt-3">
            <p> 
                <a href="db/public/index.php">Lista</a>
            </p>
            </div>
        </form>
        <a href="index.html" class="btn btn-secondary mt-3">Voltar para a Página Principal</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>