<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{
  private $titulo;
  private $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;

  function __construct($ti, $au, $pag,$lei) {
    $this->titulo = $ti;
    $this->autor = $au;
    $this->totPaginas = $pag;
    $this->pagAtual = 1;
    $this->aberto = false;
    $this->leitor = $lei;
  }
   function getTitulo () {
    return $this->titulo;
  }
   function getAutor () {
    return $this->autor;
  }
   function getTotPaginas () {
    return $this->totPaginas;
  }
   function getPagAtual () {
    return $this->pagAtual;
  }
   function getAberto () {
    return $this->aberto;
  }
   function getLeitor () {
    return $this->leitor;
  }
   function setTitulo ($ti) {
    $this->titulo = $ti;
  }
   function setAutor ($au) {
    $this->autor = $au;
  }
   function setTotPaginas ($tot) {
    $this->totPaginas = $tot;
  }
   function setPagAtual ($pa) {
    $this->pagAtual = $pa;
  }
   function setAberto ($ab) {
    $this->aberto = $ab;
  }
   function setLeitor ($lei) {
    $this->leitor = $lei;
  }
  public function detalhes() {
    echo "Livro: " . $this->titulo . " escrito por " . $this->autor;
    echo "<br />Páginas: " . $this->totPaginas . " Atual: " . $this->getPagAtual();
    echo "<br />Sendo lido por " . $this->leitor->getNome();
  }
  public function abrir(){
    if ($this->getAberto() == true) {
      echo "Já estou aberto";
    } else {
      $this->setAberto(true);
    }
  }
  public function fechar(){
    if ($this->getAberto() == false) {
      echo "Já estou fechado";
    } else {
      $this->setAberto(false);
    }
  }
  public function folhear($p){
    if ($this->aberto == true && $p <= $this->getTotPaginas()) {
      $this->pagAtual = $p;
    } else {
      echo "O livro está fechado ou estou indo para uma página inacessivel";
    }
  }
  public function avancarPag(){
    if ($this->aberto == false or $this->getPagAtual() == $this->getTotPaginas()) {
      echo "Não posso avançar estou fechado ou no fim do livro";
    } else {
      $this->setPagAtual($this->getPagAtual() + 1);
    }
  }
  public function voltarPag(){
    if ($this->aberto == false or $this->getPagAtual() == 1) {
      echo "Não posso voltar estou fechado ou na página inicial";
    } else {
      $this->setPagAtual($this->getPagAtual() - 1);
    }
  }
}

 ?>
