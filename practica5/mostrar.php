<?php include('../includes/header.php');
include('conexion.php');
  if (isset($_GET['eliminar'])) {
    $data = array('id'=>$_GET['eliminar']);
    $res = pg_delete($connect, 'user', $data);
    //  if ($res) {
    //      echo "El dato POST será borrado: $res\n";
    //  } else {
    //      echo "El usuario debe haber enviado entradas incorrectas\n";
    //  }
  }
   $query = "select * from public.user order by id";
   $resultado = pg_query($connect, $query) or die("Error en la Consulta SQL");
   $numReg = pg_num_rows($resultado);
    if($numReg>0){?>
      <table class="table">
        <thead class="table-inverse">
          <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Password</th>
            <th>
            </th>
          </tr>
        </thead>
        <tbody clas="table-striped">
      <?php
      while ($fila=pg_fetch_array($resultado)) {?>
        <tr>
          <td><?php echo $fila['id'] ?></td>
          <td><?php echo $fila['nombre'] ?></td>
          <td><?php echo $fila['pass'] ?></td>
          <td>
            <a type="button" class="btn btn-success" href="edit.php?editar=<?php echo $fila['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a type="button" class="btn btn-danger" href="mostrar.php?eliminar=<?php echo $fila['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
          </td>
        </tr>
    <?php  }
        echo "</tbody>";
        echo "</table>";
    }else{
      echo "No hay Registros";
    }
   pg_close($connect);
    ?>

<?php
include('../includes/footer.php'); ?>
