<?php
/*
  Define a conta do banco
 */
class ContaBanco {
  //Atributos
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  //Construtor
  function __construct() {
    $this->setSaldo(0);
    $this->setStatus(false);

  }

  //Metodos
  public function abrirConta($t) {
    $this->setTipo($t);
    $this->setStatus(true);
    if ($t == 'CC') {
      $this->setSaldo(50);
    } elseif ($t == 'CP') {
      $this->setSaldo(150);
    }
  }
  public function fecharConta() {
    if ($this->getSaldo() > 0) {
      echo "Conta com dinheiro";
    } elseif ($this->getSaldo() < 0) {
      echo "A conta está em debito";
    } else {
      $this->setStatus(false);
    }
  }
  public function depositar($val) {
    if  ($this->getStatus()) {
      $this->setSaldo($this->getSaldo() + $val);
      echo "<p>Deposito de R$ $val na conta de " . $this->getDono() . "</p>";
    } else {
      echo "A conta está fechada";
    }
  }
  public function sacar($val) {
    if ($this->getStatus()) {
      if ($this->getSaldo() >= $val) {
        $this->setSaldo($this->getSaldo() - $val);
        echo "<p>Saque de R$ $val autorizado na conta de " . $this->getDono() . "</p>";
      }
    } elseif ($this->getSaldo() < $val) {
      echo "Saldo insuficiente";
    } else {
      echo "A Conta está fechada";
    }
  }
  public function pagarMensal() {
    $v;
    if ($this->getTipo() == 'CC') {
      $v = 12;
    } elseif ($this->getTipo() == 'CP') {
      $v = 20;
    }
    if ($this->getStatus()) {
      if ($this->getSaldo() > $v) {
        $this->setSaldo($this->getSaldo() - $v);
      } elseif ($this->getSaldo() < $v) {
        echo "Saldo insuficiente";
      } else {
        echo "Conta fechada";
      }
    }
  }

//Setters e Getters
  public function setNumConta($n) {
    $this->numConta= $n;
  }
  public function getNumConta() {
    return $this->numConta;
  }
  public function setTipo($t) {
    $this->tipo = $t;
    }

  public function getTipo() {
    return $this->tipo;
  }
  public function setDono($d) {
    $this->dono = $d;
  }
  public function getDono() {
    return $this->dono;
  }
  public function setSaldo($s) {
    $this->saldo = $s;
  }
  public function getSaldo() {
    return $this->saldo;
  }
  public function setStatus($s) {
    $this->status = $s;
  }
  public function getStatus() {
    return $this->status;
  }
}
 ?>
