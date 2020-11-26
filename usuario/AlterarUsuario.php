<?php
require_once "../servico/autentica.php";
require_once "../servico/Bd.php";

$_SESSION["pagina"] = "usuario"; // usado pelo navBar pra saber a pagina atual

$id = $_GET["id"];
$bd = new Bd();
$sql = "select * from usuario where id='$id'";

foreach ($bd->query($sql) as $row)
{
    $login = $row['login'];
    $senha = $row['senha'];
}

?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS da Tabela de visualização de dados -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Alterção de usuário</title>
  </head>
  <body>
    <?php include "../componentes/Navbar.php"; ?> 
    <div class="container">
      <h1>Tela de inclusão de usuários</h1>
      <hr>
      <a href="ConsultaUsuario.php"> < Voltar </a>
      
      <br><br>
      
      <form action="Salvar.php">
        <div class="form-group">
          <label for="Login">Login</label>
          <?php
              echo "<input type='hidden' name='id' value='$id' >";
              echo "<input type='text' name='login' class='form-control' value='$login'  >";
          ?>
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <?php
          echo "<input type='text' name='senha' class='form-control' value='$senha' id='senha' >";
          ?>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
   </div> <!-- container -->
    
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>