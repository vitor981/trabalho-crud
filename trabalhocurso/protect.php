<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Vocé não pode acessar essa página porque não está logado.<p><a href=\"login.php\">Entrar</a></p>");
}

?>

