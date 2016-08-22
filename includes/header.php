<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <link rel="icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <title>Practicas</title>
    <style media="screen">
    body {
      padding-top: 5rem;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
      <a class="navbar-brand active" href="../index.php">Practicas</a>
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../practica.php">Practica 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../practica2.php">Practica 2</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Practica 3
          <span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="Preview">
            <a  class="dropdown-item" href="datos.php">Datos</a>
            <a  class="dropdown-item" href="suma.php">Suma</a>
            <a  class="dropdown-item" href="resta.php">Resta</a>
            <a  class="dropdown-item" href="multiplicacion.php">Multiplicacion</a>
            <a  class="dropdown-item" href="division.php">Division</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Practica 4
          <span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="Preview">
            <a  class="dropdown-item" href="../practica4/">Introducir datos</a>
            <a  class="dropdown-item" href="../practica4/mostrar.php">Mostrar datos</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Practica 5
          <span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="Preview">
            <a  class="dropdown-item" href="../practica5/">Introducir datos</a>
            <a  class="dropdown-item" href="../practica5/mostrar.php">Mostrar datos</a>
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
                <a  class="dropdown-item" href="../logout.php">logout</a>
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
