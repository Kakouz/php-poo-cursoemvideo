<?php
require_once 'Aluno.php';
class Bolsista extends Aluno {
  private $bolsa;

  function renovarBolsa() {
    echo "Bolsa Renovada";
  }
  public function pagarMensalidade() {
    echo "<p>" . $this->getNome() . " é Bolsista! Então paga com desconto!</p>";
  }
  function getBolsa() {
    return $this->bolsa;
  }
  function setBolsa($b) {
    $this->bolsa = $b;
  }
}

 ?>
