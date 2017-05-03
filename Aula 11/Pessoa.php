<?php
  abstract class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    public final function fazerAniversario(){
      $this->idade ++;
    }
    function getNome() {
      return $this->nome;
    }
    function getIdade() {
      return $this->Idade;
    }
    function getSexo() {
      return $this->sexo;
    }
    function setNome($n) {
      $this->nome = $n;
    }
    function setIdade($i) {
      $this->idade = $i;
    }
    function setSexo ($s) {
      $this->sexo = $s;
    }
  }
 ?>
