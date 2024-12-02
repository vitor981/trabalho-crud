<?php
require_once '../config/db.php';

if (isset($_GET['idusuario'])) {
    $id = (int) $_GET['idusuario'];
    $sql = "DELETE FROM usuarios WHERE idusuario = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../public/index.php");
        exit;
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
}
?>