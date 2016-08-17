<?php

  include('header.php');
  if(isset($_SESSION["nombre"])){
    $n = $_SESSION["n"];
    $n2 = $_SESSION["n2"];
    echo "<h1>La suma de ".$n."+".$n2." es : ".($n+$n2)."</h1>";
  include('footer.php');
}else{
  $mensaje = "hola";
  header('Location: datos.php?mensaje=$mensaje');
}
 ?>
