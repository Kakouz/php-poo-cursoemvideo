<?php

  abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome, $idade, $sexo) {
      $this->nome = $nome;
      $this->idade = $idade;
      $this->sexo = $sexo;
      $this->experiencia = 0;
    }

    protected function ganharExp($n) {
      $this->experiencia += $n;
    }

    function getNome() {
      return $this->nome;
    }
    function getIdade() {
      return $this->idade;
    }
    function getSexo() {
      return $this->sexo;
    }
    function getExperiencia() {
      return $this->experiencia;
    }
    function setNome($nome) {
      $this->nome = $nome;
    }
    function setIdade($idade) {
      $this->idade = $idade;
    }
    function setSexo($sexo) {
      $this->sexo = $sexo;
    }
    function setExperiencia($experiencia) {
      $this->experiencia = $experiencia;
    }
  }
 ?>
