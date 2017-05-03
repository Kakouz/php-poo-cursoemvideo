<?php
  require_once 'Pessoa.php';
  class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    public function pagarMensalidade() {
      echo "<p>Pagando mensalidade do aluno: </p>" . $this->getNome();
    }
    function getMatricula() {
      return $this->matricula;
    }
    function getCurso() {
      return $this->curso;
    }
    function setMatricula($m) {
      $this->matricula = $m;
    }
    function setCurso ($c) {
      $this->curso = $c;
    }
  }
 ?>
