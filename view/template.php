<?php
include_once('header.php');
?>

<form class="" method="post">
  <div class="form-group">
    <label for="name">Ingresa el nombre</label>
    <input type="text" class="form-control" name="name">
  </div>
  <br>
  <div class="form-group">
    <label for="email">Ingresa el email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <br>
  <button type="submit" name="submit" class="btn btn-success btn-lg">Enviar</button>
</form>

<?php
include_once('footer.php');
?>