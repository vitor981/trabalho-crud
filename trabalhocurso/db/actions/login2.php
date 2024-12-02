<?php

require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    if (empty($_POST['email'])) {
        echo "Preencha seu e-mail";
    } else if (empty($_POST['senha'])) {
        echo "Preencha sua senha";
    } else {
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        if ($sql_query->num_rows === 1) {
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['idusuario'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: index.html");
            exit;
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}

?>