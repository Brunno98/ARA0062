<?php
session_start();

if (!isset($_SESSION["autenticado"])) {
    header("Location: index.html");
    // echo "
    // <script>
    //   window.location.replace('https://aula-php-andre-eppinghaus.000webhostapp.com/20202/3006');
    // </script>
    // ";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body>
      
      <div class="container">
        <h1>Bem-vindo usuário</h1>
       
           <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active" href="usuario/ConsultaUsuario.php">Cadastro de Usuários</a>
              </li>
            </ul>
    
        <hr>
        <br>      
          
      </div>
    

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>