<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Practicas</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <style media="screen">
    body {
      padding-top: 5rem;
      }
      .starter-template {
      padding: 3rem 1.5rem;
      text-align: center;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
      <a class="navbar-brand active" href="index.php">Practicas</a>
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="practica.php">Practica 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="practica2.php">Practica 2</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Practica 3
          <span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="Preview">
            <a  class="dropdown-item" href="practica3/datos.php">Datos</a>
            <a  class="dropdown-item" href="practica3/suma.php">Suma</a>
            <a  class="dropdown-item" href="practica3/resta.php">Resta</a>
            <a  class="dropdown-item" href="practica3/multiplicacion.php">Multiplicacion</a>
            <a  class="dropdown-item" href="practica3/division.php">Division</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="practica4/">Practica 4</a>
        </li>
          <?php
          session_start();
            if (isset($_SESSION["nombre"])){
            ?>
              <li class="nav-item dropdown pull-md-right">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION["nombre"] ?>
              <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="Preview">
                <a  class="dropdown-item" href="logout.php">logout</a>
              </div>
            </li>
            <?php
            }else {
              echo "<li class='nav-item pull-md-right'>";
              echo "<a class='nav-link' href=''>User</a>";
              echo "</li>";
            }
          ?>

      </ul>
    </nav>

    <div class="container">

        <h1>Practicas de PHP en AppData</h1>
        <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
