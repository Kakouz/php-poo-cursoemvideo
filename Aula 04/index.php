<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 04</title>
  </head>
  <body>
    <?php
    require_once 'Caneta.php';

    $c1 = new Caneta ("BIC", "Azul", 0.5);
    $c2 = new Caneta ("KKK", "Verde", 1.0);

    var_dump($c1);
    var_dump($c2);
     ?>
  </body>
</html>
