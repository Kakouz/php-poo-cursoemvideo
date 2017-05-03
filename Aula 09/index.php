<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 09</title>
  </head>
  <body>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $p[0] = new Pessoa ("Pedro", "22", "M");
    $p[1] = new Pessoa ("Maria", 31, "F");

    $l[0] = new Livro ("PHP básico", "José da Silva", 300, $p[0]);
    $l[1] = new Livro ("POO com PHP", "Maria de Souza", 500, $p[0]);
    $l[2] = new Livro ("PHP avançado", "Ana Paula", 800, $p[1]);

    $l[0]->abrir();
    $l[0]->folhear(80);
    $l[0]->detalhes();
    echo "<br />";
    $l[1]->detalhes();
    echo "<br />";
    $l[2]->detalhes();

      ?>
  </body>
</html>
