<?php
require_once "../servico/autentica.php";
require_once "../servico/Bd.php";

$_SESSION["pagina"] = "usuario"; // usado pelo navBar pra saber a pagina atual

$id = $_GET["id"];
$sql = "delete from usuario where id='$id' ";
$bd = new Bd();
$contador = $bd->exec($sql);

?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Exclusao de Usuario</title>
  </head>
  <body>
      
    <div class="container">
      <div class="row">
        <div class="col col-12 col-md-2 my-3">
          <a href="ConsultaUsuario.php" class="btn btn-info btn-block" > < Voltar</a>
        </div>
        <div class="col col-12 col-md-8 my-3">
            <h1 class="text-center">Foi excluído <?php echo $contador ?> registro</h1>
        </div>
      </div>
    
    </div> <!-- fim container -->
    

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>