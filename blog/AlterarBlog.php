<?php
require_once "../servico/autentica.php";
require_once "../servico/Bd.php";

$_SESSION["pagina"] = "blog"; // usado pelo navBar pra saber a pagina atual

$id = $_GET["id"];
$sql = "SELECT * FROM blog WHERE id = '$id'";
$bd = new Bd();
$consulta = $bd->query($sql)->fetch();
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>
  <body>
    <?php include "../componentes/Navbar.php"; ?> 
    <div class="container">
      <h1>Tela de alteração de Post</h1>
      <hr>
      <a href="ConsultaBlog.php"> < Voltar </a>
      <!-- TODO: alterar -->
      <br><br>
      
      <form action="Salvar.php">
      <?php echo "<input type='hidden' name='id' value=$id>"; ?>
        <div class="form-group">
          <label for="titulo">Titulo</label>
          <input type="text" name="titulo" class="form-control" id="titulo" value="<?php echo $consulta["titulo"]?>" >
        </div>
        <div class="form-group">
          <label for="corpo">Corpo</label>
          <textarea name="corpo" class="form-control" id="corpo" rows="5"><?php echo $consulta["corpo"]?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Postar</button>
      </form>

   </div> <!-- container -->
    
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>