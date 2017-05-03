<?php
require_once 'Pessoa.php';

class Professor extends Pessoa {
  private $especialidade;
  private $salario;

  public function receberAumento($valor) {
    $this->setSalario($this->getSalario() + $val);
      }

  function getEspecialidade() {
    return $this->especialidade;
  }
  function getSalario() {
   return $this->salario;
  }
  function setEspecialidade($e) {
    $this->especialidade = $e;
  }
  function setSalario ($v);
  $this->salario = $v;
}
 ?>
