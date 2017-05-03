<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
  private $setor;
  private $trabalhando;

  function mudarTrabalho() {
    $this->setTrabalhando($this->getTrabalhando());
  }
  function getSetor() {
    return $this->setor;
  }
  function getTrabalhando() {
    return $this->trabalhando;
  }
  function setSetor($set) {
    $this->setor = $set;
  }
  function setTrabalhando($trab) {
    $this->trabalhando = ! $trab;
  }
}
 ?>
