<?php include('../includes/header.php');
include('conexion.php');
    if (isset($_POST ['id'])) {
      $data = array('id'=>$_POST ['id']);
      $res = pg_update($connect, 'user', $_POST, $data);
      header('Location: mostrar.php');
    }
   if (isset($_GET ['editar'])) {
     $data = array('id'=>$_GET['editar']);
     $rec = pg_select($connect, 'user', $data);
   }
   pg_close($connect);
    ?>
    <form class="" action="edit.php" method="post">
      <input class="form-control" type="hidden" placeholder="" id="id" name="id" value="<?php echo $rec[0]['id']; ?>">
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-2 col-form-label">Nombre</label>
        <div class="col-xs-10">
          <input class="form-control" type="text" placeholder="Introduce tu nombre" id="name" name="nombre" value="<?php echo $rec[0]['nombre']; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-2 col-form-label">Password</label>
        <div class="col-xs-3">
          <input class="form-control" type="password" id="pass" name="pass" placeholder="Introduce una contraseña" value="<?php echo $rec[0]['pass']; ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
<?php
include('../includes/footer.php'); ?>
