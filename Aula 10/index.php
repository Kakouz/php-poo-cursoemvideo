<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 10</title>
  </head>
  <body>
    <?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';


    $p[0] = new Pessoa();
    $p[1] = new Aluno();
    $p[2] = new Professor();
    $p[3] = new Funcionario();

    $p[0]->setNome("Pedro");
    $p[1]->setNome("Maria");
    $p[2]->setNome("Cláudio");
    $p[3]->setNome("Fabiana");

    $p[0]->setSexo("M");
    $p[3]->setSexo("F");

    $p[1]->setCurso("Informática");
    $p[2]->setSal(2500.75);
    $p[3]->setSetor("Estoque");

    $p[2]->receberAum(550.20);
    $p[3]->mudarTrabalho();
    $p[1]->cancelarMatr();

    var_dump($p[0],$p[1], $p[2], $p[3]);
    ?>
  </body>
</html>
