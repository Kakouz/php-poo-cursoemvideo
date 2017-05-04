<?php
  require_once 'Gafanhoto.php';
  require_once 'Video.php';
  class Visualizacao {
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme) {
      $this->espectador = $espectador;
      $this->filme = $filme;
      $this->filme->setViews($this->filme->getViews() + 1);
      $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }

    public function avaliar() {
      $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota) {
      $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc($porc) {
      $nova = 0;
      if ($porc <= 20) {
        $nova= 3;
      } elseif ($porc <= 50) {
        $nova = 5;
      } elseif ($porc <= 90) {
        $nova = 8;
      } else {
        $nova = 10;
      }
      $this->filme->setAvaliacao($nova);
    }
    function getEspectador() {
      return $this->espectador;
    }
    function getFilme() {
      return $this->filme;
    }
    function setEspectador($espectador) {
      $this->espectador = $espectador;
    }
    function setFilme($filme) {
      $this->filme = $filme;
    }
  }
 ?>
