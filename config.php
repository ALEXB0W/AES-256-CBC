<?php

$key = 'qkwjdiw239&&jdafweihbrhnan&^%$ggdnawhd4njshjwuuO';

try {
  $con = new PDO('mysql:host=localhost;dbname=cifrado_aes_256_cbc', 'root', 'root');
} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?>
