<?php
session_start();

require_once "servico/Bd.php";

$login=$_POST["login"];
$senha=$_POST["senha"];

$bd = new Bd();
$sql = "SELECT * FROM usuario where login = '$login'";

/*
* o método query() retorna um objeto PDOStatement,
* ao usar o método fetch() o resultado é convertido
* para um array
*/
$consulta = $bd->query($sql)->fetch();

if (!$consulta) {
    session_destroy();
    echo "Usuario não encontrado <br>";
    echo "<a href='index.html'>< Voltar</a>";
    die;
}

if ($login == $consulta["login"] && $senha == $consulta["senha"]) {
    $_SESSION["autenticado"] = true;
    $_SESSION["login"] = $login;
    $_SESSION["id_usuario"] = $consulta["id"];
    header("Location: menu.php");
} else {
    session_destroy();
    echo "Senha inválida<br>";
    echo "<a href='index.html'>< Voltar</a>";
}
?>