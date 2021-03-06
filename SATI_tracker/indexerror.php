<?php
// Para tener variables de sesion
  session_start();

// Importar archivo de conexion
  require 'sec/mysqli_connect.php';

?>

<!-- -- Pagina de error de inicio de sesion -- -->
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <title>SATI Fail Login</title>
    <link rel="shortcut icon" href="assets/pics/favicon.ico" type="image/x-icon">

  </head>
  <body>
    <!-- Navbar Component -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <a class="navbar-brand" href="index.php"><img src="assets/pics/logo_sati.png" height="30" alt="Logo SATI">  SATI Tracker</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="blog/blog.php">Blog <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
      <a class="navbar text-right lead text-body" href="index.php">¡ Login !</a>
    </nav>
    <!-- End of navbar -->

    <div class="jumbotron" style="background:url(assets/pics/bg_it.png) no-repeat; background-size: cover;">
      <div class="row">
        <div class="col-auto">
          <div class="my-5 bg-secondary text-white rounded">
            <h1 class="display-4 px-4 text-center">Error al iniciar sesión</h1>
            <hr class="my-1">
            <p class="font-italic pl-5 text-left">"<?php echo $_SESSION['fail_login_type'] ?>"</p>
            <p class="lead p-2">
              <a class="btn btn-info btn-block" href="index.php" role="button">Intente Nuevamente</a>
            </p>
          </div>
        </div>
      </div>
  </div>

    <div class="row-fluid">
      <div class="text-center bg-dark mt-5">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-white" href="blog/contactos_sati.php">Reportar Errores</a>
          </li>
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
