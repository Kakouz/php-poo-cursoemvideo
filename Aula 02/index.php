<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 02</title>
  </head>
  <body>
    <?php
      require_once 'Caneta.php';
      $c1 = new Caneta;
      $c1->cor = "Azul";
      $c1->ponta = 0.5;
      $c1->destampar();

      $c2 = new Caneta;
      $c2->cor = "Verde";
      $c2->carga = 50;
      $c2->tampar();
      var_dump($c1);
      var_dump($c2);
     ?>
  </body>
</html>
