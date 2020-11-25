<?php
require_once "../servico/autentica.php";
require_once "../servico/Bd.php";

$id = $_GET["id"];
$bd = new Bd();
$sql = "DELETE FROM blog WHERE id = '$id'";
$cont = $bd->exec($sql);

echo "foi excluido $cont registros";
?>

<a href="ConsultaBlog.php"> < Voltar</a>