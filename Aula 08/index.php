<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ultra Emoji Combat</title>
  </head>
  <body>
  <?php
  require_once 'Lutador.php';
  require_once 'Luta.php';
  /* Para criar um novo lutador lembre-se do metódo construtor.
  Ele se reproduz nessa ordem
  nome, nacionalidade, idade, altura, peso, categoria, vitorias, derrotas, empates.
  */
  $lutador = array();

  $lutador[0] = new Lutador ('Pretty Boy', 'França', 31, 1.75, 68.9 , 11, 2, 1);
  $lutador[1] = new Lutador ('Putscript', 'Brasil', 29, 1.68, 57.8 , 14, 2, 3);
  $lutador[2] = new Lutador ('Snapshadow', 'EUA', 35, 1.65, 80.9 , 12, 2, 1);
  $lutador[3] = new Lutador ('Dead Code', 'Austrália', 28, 1.93, 81.6 , 13, 0, 2);
  $lutador[4] = new Lutador ('Ufocobol', 'Brasil', 37, 1.70, 119.3 , 5, 4, 3);
  $lutador[5] = new Lutador ('Nerdaard', 'EUA', 30, 1.81, 105.7 , 12, 2, 4);

  $UEC01 = new Luta ();
  $UEC01->marcarLuta($lutador[4], $lutador[5]);
  $UEC01->lutar();

   ?>
  </body>
</html>
