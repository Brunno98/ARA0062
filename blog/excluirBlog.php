<?php
session_start();
// Confere se a sessao está autenticada
if (!isset($_SESSION["autenticado"])) {
    session_destroy();
    // Redireciona o usuario para a tela de login
    header("Location: ../index.html");
}
require_once "../servico/Bd.php";

$id = $_GET["id"];
$bd = new Bd();
$sql = "DELETE FROM blog WHERE id = '$id'";
$cont = $bd->exec($sql);

echo "foi excluido $cont registros";
?>

<a href="consultaBlog.php"> < Voltar</a>