<?php include('../includes/header.php');
include 'controllers/control.php' ?>
     <form class="" action="mostrar.php" method="post">
       <div class="form-group row">
         <label for="example-text-input" class="col-xs-2 col-form-label">Nombre</label>
         <div class="col-xs-10">
           <input class="form-control" type="text" placeholder="Introduce tu nombre" id="name" name="name" value="<?php if(isset($_SESSION["nombre"])){echo $_SESSION["nombre"];} ?>">
         </div>
       </div>
       <div class="form-group row">
         <label for="example-text-input" class="col-xs-2 col-form-label">Password</label>
         <div class="col-xs-3">
           <input class="form-control" type="password" id="n1" name="pw" placeholder="Introduce una contraseña" value="<?php if(isset($_SESSION["nombre"])){echo $_SESSION["n"];} ?>">
         </div>
       </div>
       <button type="submit" name="button">enviar</button>
     </form>
<?php include('../includes/footer.php'); ?>
