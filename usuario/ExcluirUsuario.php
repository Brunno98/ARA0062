<?php

include_once "../servico/Bd.php";

$id = $_GET["id"];
$sql = "delete from usuario where id='$id' ";
$bd = new Bd();
$contador = $bd->exec($sql);

echo "<h1>foi excluído $contador registro</h1>";

?>

<a href="ConsultaUsuario.php">Voltar</a>
