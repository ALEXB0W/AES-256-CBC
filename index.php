<?php
include_once('header.php');

if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $name = encryptthis($name, $key);
  $email = $_POST['email'];
  $email = encryptthis($email, $key);

  $statement = $con->prepare('INSERT INTO people (name, email) VALUES (:name, :email)');
  $statement->execute(array(':name' => $name, ':email' => $email));
}

$reg = $con->prepare('SELECT * FROM people');
$reg->execute(array());
$consulta = $reg->fetchAll();
decryptthis($consulta, $key);

foreach ($consulta as $cons) {
  //print_r($cons);
  echo '<p>' . decryptthis($cons['name'], $key) . '</p>';
  echo '<p>' . decryptthis($cons['email'], $key) . '</p>';
  echo '<p>' . $cons['reg_date'] . '</p>';
}

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