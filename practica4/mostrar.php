<!DOCTYPE html>
<?php include('../includes/header.php');
include 'controllers/control.php' ?>
    <?php
    $control = new control();
      if(isset($_POST ['name'])){
        $control->alta();
      }
      $find = $control->mostrar();?>
      <table width='100%' border='1'> <?php
      foreach ($find as $tabla) {
        $tabla = $tabla->to_array();
          echo "<tr>";
            echo "<td>";
            echo $tabla['nombre'];
            echo "</td>";
            echo "<td>";
            echo $tabla['pass'];
            echo "</td>";
          echo "<tr>";
        // echo $tabla->nombre;
      }
      ?>
    </table>
     <form class="" action="index.php" method="post">
       <button type="submit" name="button">Regresar</button>
     </form>
<?php include('../includes/footer.php'); ?>
