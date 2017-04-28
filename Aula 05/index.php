<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 05</title>
  </head>
  <body>
    <?php
    require_once 'Conta.php';

    $contaJubileu = new ContaBanco();
    $contaCreuza = new ContaBanco();
    $contaJubileu->abrirConta("CC");
    $contaJubileu->setDono("Jubileu");
    $contaJubileu->setNumConta(1111);
    $contaJubileu->depositar(300);
    $contaJubileu->pagarMensal();
    $contaJubileu->sacar(338);
    $contaJubileu->fecharConta();

    $contaCreuza->abrirConta("CP");
    $contaCreuza->setDono("Creuza");
    $contaCreuza->setNumConta(2222);
    $contaCreuza->depositar(500);
    $contaCreuza->pagarMensal();
    $contaCreuza->sacar(630);
    $contaCreuza->fecharConta();

    var_dump($contaJubileu);
    var_dump($contaCreuza);
     ?>
  </body>
</html>
