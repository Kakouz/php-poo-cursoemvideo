<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 11</title>
  </head>
  <body>
    <?php
    /*require_once 'Visitante.php';
    $v1 = new Visitante();
    $v1->setNome("Juvenal");
    $v1->setIdade(33);
    $v1->setSexo("M");*/

    require_once 'Aluno.php';
    $a1 = new Aluno();
    $a1->setNome("Pedro");
    $a1->setMatricula(1111);
    $a1->setIdade(16);
    $a1->setSexo("M");
    $a1->setCurso("Informática");
    $a1->pagarMensalidade();
    var_dump($a1);

    require_once 'Bolsista.php';
    $b1 = new Bolsista();
    $b1->setMatricula(1112);
    $b1->setNome("Jubileu");
    $b1->setBolsa(12.5);
    $b1->setCurso("Adm");
    $b1->setIdade(17);
    $b1->pagarMensalidade();

    var_dump($b1);
     ?>
  </body>
</html>
