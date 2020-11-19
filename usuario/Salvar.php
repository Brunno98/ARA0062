<?php
session_start();
// Confere se a sessao está autenticada
if (!isset($_SESSION["autenticado"])) {
    session_destroy();
    // Redireciona o usuario para a tela de login
    header("Location: ../index.html");
}

include_once "../servico/Bd.php";

$login = $_GET["login"];
$senha = $_GET["senha"];

if (isset($_GET["id"])) {
    // atualiza registro
    $id = $_GET["id"];
    $sql = "update `usuario` set login='$login', senha='$senha' where id='$id' ";
    $operacao = "atualizado";
} else {
    // grava um novo
    $sql = "INSERT INTO `usuario` (`id`, `login`, `senha`) VALUES (NULL, '$login', '$senha')";    
    $operacao = "inserido";
}

$bd = new Bd();
$contador = $bd->exec($sql);
echo "<h1>foi $operacao $contador registro</h1>";
?>
<a href="ConsultaUsuario.php">Voltar</a>
