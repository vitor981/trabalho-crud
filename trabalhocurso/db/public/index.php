<?php
require_once '../config/db.php';
include('../../protect.php');
require_once '../actions/editar_usuario.php';
require_once '../actions/excluir_usuario.php';

$sql = "SELECT idusuario, nome, email FROM usuarios";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Lista de Usuários</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['idusuario'] ?></td>
                    <td><?= htmlspecialchars($row['nome']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td>
                        <a href="editar.php?idusuario=<?= $row['idusuario'] ?>">Editar</a>
                        <a href="../actions/excluir_usuario.php?idusuario=<?= $row['idusuario'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="4">Nenhum usuário encontrado.</td></tr>
        <?php endif; ?>
    </table>
    <br>
    <a href="../../cadastro.php">Cadastrar Novo Usuário</a>
</body>
</html>