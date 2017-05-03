<?php
require_once 'Pessoa.php';
class Professor extends Pessoa {
  private $esp;
  private $sal;

  function receberAum($aum) {
    $this->setSal($this->getSal() + $aum);
  }
  function getEsp() {
    return $this->esp;
  }
  function getSal() {
    return $this->sal;
  }
  function setEsp($esp) {
    $this->esp = $esp;
  }
  function setSal($sal) {
    $this->sal = $sal;
  }
}
 ?>
