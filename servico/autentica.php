<?php
session_start();
// Confere se a sessao está autenticada
if (!isset($_SESSION["autenticado"])) {
    session_destroy();
    // Redireciona o usuario para a tela de login
    header("Location: index.html");
}