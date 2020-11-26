<?php

function estruturaPost($titulo, $corpo, $id, $usuario)
{
echo "
<div class='col-4'>
  <div class='card mb-3'>
    <div class='card-body'>
      <input type='hidden' name='id' value='$id'>
      <h5 class='card-title'>$titulo</h5>
      <p class='card-text'>$corpo</p>

      <footer class='blockquote-footer text-right my-3'>
        <small class='text-muted'> by ~$usuario</small>
      </footer>
      <!-- </div> card body -->
      <!-- <div class='card-footer'> -->
        <div class='btn-group btn-block btn-group-sm' role='group'>
          <a href='AlterarBlog.php?id=$id' class='btn btn-info'>Alterar</a>
        <!-- </div> -->
        <!-- <div class='col'> -->
          <a href='#' onclick='pergunta($id)' class='btn btn-danger'>Excluir</a>
        </div>
      </div>
  </div>
</div>
";
}