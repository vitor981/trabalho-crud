<?php
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) $_POST['idusuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE idusuario=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../public/index.php");
        exit;
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}


?>