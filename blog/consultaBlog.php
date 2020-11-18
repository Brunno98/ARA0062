<?php
//sem segurança
include_once "../servico/Bd.php";

$post = "
<div class='col-4'>
  <div class='card mb-3'>
    <div class='card-body'>
      <input type='hidden' name='id' value=':id'>
      <h5 class='card-title'>:title</h5>
      <p class='card-text'>:corpo</p>
      <div class='row'>
        <div class='col'>
          <a href='alterarBlog.php?id=:id' class='btn btn-info btn-sm btn-block'>Alterar</a>
        </div>
        <div class='col'>
          <a href='excluirBlog.php?id=:id' class='btn btn-danger btn-sm btn-block'>Excluir</a>
        </div>
      </div>
    </div>
  </div>
</div>
";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>
  <body>
      
    <div class="container">
      <h1>Tela do Blog</h1>
      <hr>
      <a href="../menu.php"> < Voltar </a>
      <!-- TODO: alterar -->
      <br><br> 
      
      <a class="btn btn-primary" href="incluirBlog.php" role="button">novo Post</a>
      <!-- TODO: alterar -->
      <br><br>
      
      <div class="row row-cols-3 justify-content-around">
        <?php
          $bd = new Bd();
          $sql = "select * from blog";
          foreach ($bd->query($sql) as $row) {
              echo str_replace(
                [":id", ":title", ":corpo"],
                [$row["id"], $row["titulo"], $row["corpo"]],
                $post
              );
          }
        ?>
      </div>
    </div>
    

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     
  </body>
</html>