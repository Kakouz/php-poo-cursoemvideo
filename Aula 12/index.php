<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 12</title>
  </head>
  <body>
    <?php
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';
    require_once 'Canguru.php';
    require_once 'Cachorro.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'Goldfish.php';
    require_once 'Arara.php';

    $m = new Mamifero();
    $a = new Ave();
    $r = new Reptil();
    $c = new Canguru();
    $k = new Cachorro();
    $t = new Tartaruga();

    $m->emitirSom();
    $k->emitirSom();
    $c->emitirSom();
     ?>
  </body>
</html>
