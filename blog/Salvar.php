<?php
require_once "../servico/autentica.php";

include_once "../servico/Bd.php";

$titulo = $_GET["titulo"];
$corpo = $_GET["corpo"];

if (isset($_GET["id"])) {
    // atualiza registro
    $id = $_GET["id"];
    // esse comando sql foi alterado pra ser compativel com um banco ja existente
    $sql = "update `blog` set titulo='$titulo', corpo='$corpo' where id='$id' ";
    $operacao = "atualizado";
} else {
    // grava um novo
    $sql = "INSERT INTO `blog` (`id`, `titulo`, `corpo`) VALUES (NULL, '$titulo', '$corpo')";    
    $operacao = "inserido";
}

$bd = new Bd();
$contador = $bd->exec($sql);

echo "<h1>foi $operacao $contador Post</h1>";

?>

<a href="ConsultaBlog.php">Voltar</a>
