<?php
require_once "../servico/autentica.php";
require_once "../servico/Bd.php";

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
