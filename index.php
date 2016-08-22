<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <title>Practicas</title>
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
      <a class="navbar-brand active" href="../index.php">Practicas</a>
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="practica.php"><i class="fa fa-font" aria-hidden="true"></i> Practica 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="practica2.php"><i class="fa fa-table" aria-hidden="true"></i> Practica 2</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user" aria-hidden="true"></i> Practica 3
          <span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="Preview">
            <a  class="dropdown-item" href="practica3/datos.php">Datos</a>
            <a  class="dropdown-item" href="practica3/suma.php">Suma</a>
            <a  class="dropdown-item" href="practica3/resta.php">Resta</a>
            <a  class="dropdown-item" href="practica3/multiplicacion.php">Multiplicacion</a>
            <a  class="dropdown-item" href="practica3/division.php">Division</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-database" aria-hidden="true"></i> Practica 4
          <span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="Preview">
            <a  class="dropdown-item" href="practica4/">Introducir datos</a>
            <a  class="dropdown-item" href="practica4/mostrar.php">Mostrar datos</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-database" aria-hidden="true"></i> Practica 5
          <span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="Preview">
            <a  class="dropdown-item" href="practica5/">Introducir datos</a>
            <a  class="dropdown-item" href="practica5/mostrar.php">Mostrar datos</a>
          </div>
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
