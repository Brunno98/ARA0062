<?php
session_start();

require_once "servico/Bd.php";

$login=$_POST["login"];
$senha=$_POST["senha"];

$bd = new Bd();
$sql = "SELECT * FROM usuario where login = '$login'";
$consulta = $bd->query($sql)->fetch();
if (!$consulta) {
    session_destroy();
    echo "Usuario não encontrado <br>";
    echo "<a href='index.html'>< Voltar</a>";
    die;
}

if ($login == $consulta["login"] && $senha == $consulta["senha"]) {
    $_SESSION["autenticado"] = true;
    header("Location: menu.php");
} else {
    session_destroy();
    echo "Senha inválida<br>";
    echo "<a href='index.html'>< Voltar</a>";
}
?>