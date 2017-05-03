<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
  private $matr;
  private $curso;

  function cancelarMatr() {
    echo "Matricula será cancelada";
  }
  function getMatr() {
    return $this->matr;
  }
  function getCurso() {
    return $this->curso;
  }
  function setMatr($ma) {
    $this->matr = $ma;
  }
  function setCurso($cu) {
    $this->curso = $cu;
  }
}
 ?>
