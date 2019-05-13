<?php
session_start();
require 'mysqli_connect.php';
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <title>SUDO Contactos</title>
    <link rel="shortcut icon" href="assets/pics/favicon.ico" type="image/x-icon">

  </head>
  <body>
    <!-- Navbar Component -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <a class="navbar-brand" href="index.php"><img src="assets/pics/logo_sudo.png" height="30" alt="Logo SUDO">  SUDO Tracker</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="sudo_blog.php">Blog <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Iniciar Sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
      <a class="navbar text-right lead text-body" href="index.php">¡ Hola <?php echo $_SESSION['Nombre']; ?> !</a>
    </nav>
    <!-- End of navbar -->

    <div class="jumbotron" style="background:url(assets/pics/bg_it.png) no-repeat; background-size: cover;">
      <div class="row">
        <div class="m-5 bg-secondary text-white text-left rounded">
          <h3 class="display-4 ml-3 pl-4">Presidente</h1>
          <h5 class="font-italic ml-4 pl-5 pb-3">(55) ####-####</h5>
           <hr class="my-1">
          <h3 class="display-4 ml-3 px-4">Vice-presidente</h1>
          <h5 class="font-italic ml-4 pl-5">(55) 4340-7932</h5>
          <hr class="my-1">
          <h3 class="display-4 ml-3 pl-4">Tesorera</h1>
          <h5 class="font-italic ml-4 pl-5 pb-3">(55) ####-####</h5>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="text-center bg-dark mt-5">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-white" href="https://getbootstrap.com/docs/4.2/getting-started/introduction/" target="_blank"
              rel="noopener noreferrer">Aprende Bootstrap</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jQuery.js"></script>
    <script src="assets/js/Popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
