<?php
  require_once 'Animal.php';
  class Mamifero extends Animal {
    private $corPelo;

    public function alimentar() {
      echo "Mamando";
    }
    public function emitirSom() {
      echo "Som de Mamifero";
    }
    public function locomover() {
      echo "Correndo";
    }
    function getCorPelo() {
      return $this->corPelo;
    }
    function setCorPelo($corPelo) {
      $this->corPelo = $corPelo;
    }

  }
 ?>
