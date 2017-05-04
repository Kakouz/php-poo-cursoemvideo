<?php
require_once 'Animal.php';

  class Mamifero extends Animal {
    protected $corPelo;

    function emitirSom() {
      echo "Som de mamifero ";
    }

    function getCorPelo() {
      return $this->corPelo;
    }
    function setCorPelo($corPelo) {
      $this->corPelo = $corPelo;
    }
  }
 ?>
