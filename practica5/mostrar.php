<?php include('../includes/header.php');
include('conexion.php');
   // echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";
   $query = "select * from public.user";
   $resultado = pg_query($connect, $query) or die("Error en la Consulta SQL");
   $numReg = pg_num_rows($resultado);

    if($numReg>0){?>
      <table class="table">
        <thead class="table-inverse">
          <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Password</th>
          </tr>
        </thead>
        <tbody clas="table-striped">
      <?php
      while ($fila=pg_fetch_array($resultado)) {?>
        <tr>
          <td><?php echo $fila['id'] ?></td>
          <td><?php echo $fila['nombre'] ?></td>
          <td><?php echo $fila['pass'] ?></td>
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
