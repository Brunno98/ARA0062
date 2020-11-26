<?php
require_once "../servico/autentica.php";
require_once "../servico/Bd.php";

$_SESSION["pagina"] = "usuario"; // usado pelo navBar pra saber a pagina atual

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
    <title>Gerenciamento de usuários</title>
  </head>
  <body>
    <?php include "../componentes/Navbar.php"; ?> 
    <div class="container">
      <h1>Tela de usuários</h1>
      <hr>
      <a href="../menu.php"> < Voltar </a>

      <br><br> 
      
      <div class="row">
        <div class="col col-12 col-lg-2">
          <a class="btn btn-primary btn-block" href="IncluirUsuario.php" role="button">Incluir</a>
        </div>
      </div>
      <br><br>
      
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Login</th>
            <th>Senha</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
              $bd = new Bd();
              $sql = "select * from usuario";
            
              foreach ($bd->query($sql) as $row)
              {
                  echo "<tr>";
                  echo "<td>". $row['id'] . "</td>";
                  echo "<td>". $row['login'] . "</td>";
                  echo "<td>". $row['senha'] . "</td>";
                  // Botão de excluir registro
                  echo "<td><a href='#' onclick ='Pergunta(". $row['id'] . ")'> Excluir</a></td>";
                  // Botão de alterar registo
                  echo "<td><a href='AlterarUsuario.php?id=". $row['id'] . "'>Alterar</a></td>";
                  echo "</tr>";
              }
      
          ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Login</th>
            <th>Senha</th>
            <th></th>
            <th></th>
          </tr>
        </tfoot>
      </table>
  
      
      <script>
        function Pergunta(id) {
          if (confirm("Deseja realmente excluir ?")) {
            window.location.replace("ExcluirUsuario.php?id="+id);
          }
        }
      </script>

    </div>
    

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- jQuery da Tabela de visualização de dados -->
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
     <script>         
         $(document).ready(function() {
            $('#example').DataTable();
        } );
     </script>
     
  </body>
</html>