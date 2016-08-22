<?php include('../includes/header.php');
include('conexion.php');
   if (isset($_POST ['nombre'])) {
     $res = pg_insert($connect, 'user', $_POST);
     header('Location: index.php?res=$res');
   }
   pg_close($connect);
    ?>
    <form class="" action="" method="post">
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-2 col-form-label">Nombre</label>
        <div class="col-xs-10">
          <input class="form-control" type="text" placeholder="Introduce tu nombre" id="name" name="nombre" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-2 col-form-label">Password</label>
        <div class="col-xs-3">
          <input class="form-control" type="password" id="n1" name="pass" placeholder="Introduce una contraseña" value="">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<?php
if (isset($_GET['res'])) {
  if ($_GET['res']) { ?>
    <div class="alert alert-success" role="alert">
      <strong>Yeah</strong> Dato insertado correctamente
    </div>
<?php
  } else {?>
    <div class="alert alert-danger" role="alert">
      <strong>Oh Espera</strong> Ocurrio un error al insertar
    </div>
<?php  }
}
include('../includes/footer.php'); ?>
