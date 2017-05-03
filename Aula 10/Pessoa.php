<?php

  class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    function fazerAniv() {
      $this->getIdade() + 1;
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
    function setNome($no) {
      $this->nome = $no;
    }
    function setIdade($id) {
      $this->idade = $id;
    }
    function setSexo($se) {
      $this->sexo = $se;
    }
  }
 ?>
