<?php

  class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    function __construct ($no, $id, $se) {
      $this->nome = $no;
      $this->idade = $id;
      $this->sexo = $se;
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

    public function fazerAniver() {
      $this->setIdade($this->getIdade() + 1);
      echo $this->getNome() . " fez aniversário agora tem " . $this->getIdade() . " anos de idade. Parabéns.";
    }
  }
 ?>
