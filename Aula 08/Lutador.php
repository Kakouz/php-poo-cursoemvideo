<?php

class Lutador {
  //Atributos
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria; #Peso leve, Peso Médio e Peso Pesado
  private $vitorias;
  private $derrotas;
  private $empates;

  // Metódo constutor
  public function __construct($nome, $nacionalidade, $idade, $altura, $pe, $vitorias, $derrotas, $empates) {
    $this->nome = $nome;
    $this->nacionalidade = $nacionalidade;
    $this->idade = $idade;
    $this->altura = $altura;
    $this->setPeso($pe);
    $this->vitorias = $vitorias;
    $this->derrotas = $derrotas;
    $this->empates = $empates;
  }
  //Getter e Setter [Metódos especiais]
   function getNome() {
    return $this->nome;
  }
   function getNacionalidade() {
    return $this->nacionalidade;
  }
   function getIdade() {
    return $this->idade;
  }
   function getAltura() {
    return $this->altura;
  }
   function getPeso() {
    return $this->peso;
  }
   function getCategoria() {
    return $this->categoria;
  }
   function getVitorias() {
    return $this->vitorias;
  }
   function getDerrotas() {
    return $this->derrotas;
  }
   function getEmpates() {
    return $this->empates;
  }
   function setNome($nome) {
    $this->nome = $nome;
  }
   function setNacionalidade($nacionalidade) {
    $this->nacionalidade = $nacionalidade;
  }
   function setIdade($idade) {
    $this->idade = $idade;
  }
   function setAltura($altura) {
    $this->altura = $altura;
  }
   function setPeso($pe) {
    $this->peso = $pe;
    $this->setCategoria();
  }
   function setCategoria() {
    if ($this->peso < 52.2) {
      $this->categoria = "Invalido";
    } elseif ($this->peso <= 70.3) {
      $this->categoria = "Leve";
    } elseif ($this->peso <= 83.9) {
      $this->categoria = "Médio";
    } elseif ($this->peso <= 120.2) {
      $this->categoria = "Pesado";
    } else {
      $this->categoria = "Invalido";
    }
  }
   function setVitorias($vit) {
    $this->vitorias = $this->getVitorias() + $vit;
  }
   function setDerrotas($der) {
    $this->derrotas = $this->getDerrotas() + $der;
  }
   function setEmpates($emp) {
     $this->empates = $this->getEmpates + $emp;
  }

//Metódos
  public function apresentar() {
    echo "<br />O lutador " . $this->getNome() . " é do(a) " . $this->getNacionalidade() . " tem " . $this->getIdade() . " de idade, altura de " . $this->getAltura() . "m, pesa " . $this->getPeso() . "kg lutando pela categoria " . $this->getCategoria();
  }
  public function status() {
    echo "<br />O Lutador " . $this->getNome() . " tem ". $this->getVitorias() . " Vitorias, " . $this->getDerrotas() . " Derrotas e " . $this->getEmpates() . " Empates.";
  }
  public function ganharLuta() {
    $this->setVitorias = $this->getVitorias() + 1;
    echo "<br />O lutador " . $this->getNome() . " ganhou uma luta e agora possui " . $this->getVitorias() . " vitorias.";
  }
  public function perderLuta() {
    $this->setDerrotas = $this->getDerrotas() + 1;
    echo "<br />O lutador " . $this->getNome() . " perdeu uma luta e agora possui " . $this->getDerrotas() . " derrotas.";
  }
  public function empatarLuta() {
    $this->setEmpates = $this->getEmpates() + 1;
    echo "<br />O lutador " . $this->getNome() . " empatou uma luta e agora possui " . $this->getEmpates() . " empates.";
  }
  }
 ?>
