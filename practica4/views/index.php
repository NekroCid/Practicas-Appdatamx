<!DOCTYPE html>
<?php include '../controllers/control.php' ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_POST ['name'])){
        $control = new control();
        $control->alta();
      }
     ?>
     <form class="" action="" method="post">
       <input type="text" name="name" value="">
       <input type="password" name="pw" value="">
       <button type="submit" name="button">enviar</button>
     </form>
  </body>
</html>
