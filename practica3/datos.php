<?php include('../includes/header.php') ?>
  <form class="" action="" method="post">
    <?php if(isset($_SESSION["nombre"])){echo "<fieldset disabled>";}?>
    <div class="form-group row">
      <label for="example-text-input" class="col-xs-2 col-form-label">Nombre</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" placeholder="Introduce tu nombre" id="name" name="name" value="<?php if(isset($_SESSION["nombre"])){echo $_SESSION["nombre"];} ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-xs-2 col-form-label">Número Uno</label>
      <div class="col-xs-3">
        <input class="form-control" type="number" id="n1" name="n1" placeholder="Introduce un número" value="<?php if(isset($_SESSION["nombre"])){echo $_SESSION["n"];} ?>">
      </div>
    </div>
  <div class="form-group row">
    <label for="example-text-input" class="col-xs-2 col-form-label">Número Dos</label>
    <div class="col-xs-3">
      <input type="number" class="form-control" id="n2" name="n2"placeholder="Introduce un número" value="<?php if(isset($_SESSION["nombre"])){echo $_SESSION["n2"];} ?>">
    </div>
  </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  <?php if(isset($_SESSION["nombre"])){echo "</fieldset>";}?>
  </form>
  <?php if(isset($_GET["mensaje"])){?>
  <div class="alert alert-danger" role="alert">
    <strong>Oh Espera</strong> Debes agregar datos al formulario primero
  </div>
  <?php } ?>
<?php
  if(isset($_SESSION["nombre"])){
  }else
  if(isset($_POST ['name'])){
    $_SESSION["nombre"] = $_POST ['name'];
    $_SESSION["n"] = $_POST ['n1'];
    $_SESSION["n2"] = $_POST ['n2'];
    header('Location: datos.php');
  }

?>
<?php include('../includes/footer.php') ?>
