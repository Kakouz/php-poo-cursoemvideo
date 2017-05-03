<?php
require_once 'Aluno.php';
class Tecnico extends Aluno {
    private $registroProfissional;

    public function praticar() {
      echo "O aluno técnico " . $this->getNome() . "praticou a profissão";
    }
    function getRegistroProfissional() {
      return $this->registroProfissional;
    }
    function setRegistroProfissional($rp) {
      $this->registroProfissional = $rp;
    }
}
 ?>
