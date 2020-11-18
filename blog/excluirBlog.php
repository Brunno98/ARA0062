<?php

require_once "../servico/Bd.php";

$id = $_GET["id"];
$bd = new Bd();
$sql = "DELETE FROM blog WHERE id = '$id'";
$cont = $bd->exec($sql);

echo "foi excluido $cont registros";
?>

<a href="consultaBlog.php"> < Voltar</a>