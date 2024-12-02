<?php
require_once '../config/db.php';
require_once '../actions/editar_usuario.php';
include('../../protect.php');

$usuario = null;
if (isset($_GET['idusuario'])) {
    $id = (int) $_GET['idusuario'];
    $sql = "SELECT * FROM usuarios WHERE idusuario = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        die("Usuário não encontrado.");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>
<body>
    <h2>Editar Usuário</h2>
    <?php if ($usuario): ?>
        <form action="../actions/editar_usuario.php" method="POST">
            <input type="hidden" name="idusuario" value="<?= $usuario['idusuario'] ?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($usuario['nome']) ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required><br>
            <button type="submit">Salvar Alterações</button>
        </form>
    <?php else: ?>
        <p>Usuário não encontrado.</p>
    <?php endif; ?>
    <br>
    <a href="index.php">Voltar para a lista de usuários</a>
</body>
</html>