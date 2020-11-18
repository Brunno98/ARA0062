<?php

include_once "../servico/Bd.php";

$login = $_GET["login"];
$senha = $_GET["senha"];

if (isset($_GET["id"])) {
    // atualiza registro
    $id = $_GET["id"];
    // esse comando sql foi alterado pra ser compativel com um banco ja existente
    $sql = "update `Usuario` set username='$login', senha='$senha' where id='$id' ";
} else {
    // grava um novo
    $sql = "INSERT INTO `Usuario` (`id`, `username`, `senha`) VALUES (NULL, '$login', '$senha')";    
}

$bd = new Bd();
$contador = $bd->exec($sql);

echo "<h1>foi armazenado/atualizado $contador registro</h1>";

?>

<a href="ConsultaUsuario.php">Voltar</a>
