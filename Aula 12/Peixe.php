<?php
require_once 'Animal.php';

  class Peixe extends Animal {
    private $corEscama;

    public function soltarBolha() {
      echo "Soltou uma Bolha";
    }
    public function alimentar() {
      echo "Comendo substâncias";
    }
    public function emitirSom() {
      echo "Peixe não faz som";
    }
    public function locomover() {
      echo "Nadando";
    }
    function getCorEscama() {
      return $this->corEscama;
    }
    function setCorEscama($corEscama) {
      $this->corEscama = $corEscama;
    }
  }
;?>
