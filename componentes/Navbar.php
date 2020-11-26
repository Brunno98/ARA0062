<?php
// definição dos links
$base = "/projetoFinal/";
$menu = $base . "menu.php";
$usuario = $base . "usuario/ConsultaUsuario.php";
$blog = $base . "blog/ConsultaBlog.php";
$logout = $base . "servico/Logout.php";
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <input type="hidden" id="pagina" value="<?php echo $_SESSION["pagina"]; ?>">
    <ul class="navbar-nav">
      <li class="nav-item" id="navMenu">
        <a href="<?php echo $menu ?>" class="nav-link">Menu</a>
      </li>
        <li class="nav-item" id="navUsuario">
      <a href="<?php echo $usuario ?>" class="nav-link">Usuarios</a>
        </li>
      <li class="nav-item" id="navBlog">
        <a href="<?php echo $blog ?>" class="nav-link">Blog</a>
      </li>
    </ul>
  </div>
  <a class="navbar-brand" href="#">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
    </svg>
    <span><?php echo $_SESSION["login"]; ?></span>
  </a>
  <!-- Conferir a caminho absoluto em que o projeto se encontra -->
  <a href="<?php echo $logout ?>" class="btn btn-outline-danger btn-sm mx-3">sair</a>
</nav>

<script>
  let pagina = document.getElementById("pagina").value;
  let usu;
  switch (pagina) {
    case "usuario":
      usu = document.getElementById("navUsuario");
      usu.classList.add("active");
      break;
    case "blog":
      usu = document.getElementById("navBlog");
      usu.classList.add("active");
      break;
    case "menu":
      usu = document.getElementById("navMenu");
      usu.classList.add("active");
      break;
  }
</script>