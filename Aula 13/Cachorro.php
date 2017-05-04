<?php
require_once 'Lobo.php';
class Cachorro extends Lobo {

  function emitirSom() {
    echo "Au! Au! Au!";
  }
  function reagirFrase($frase) {
    if ($frase == "toma comida" || $frase == "Olá") {
      echo "<br />Abanar e Latir ";
    } else {
    echo "<br />Rosnar ";
    }
  }
  function reagirHora($hora, $min) {
    if ($hora < 12) {
      echo "<br />Abanar ";
    } elseif ($hora >= 18) {
      echo "<br />Ignorar ";
    } else {
      echo "<br />Abanar e Latir ";
    }
  }
  function reagirDono($dono) {
    if ($dono == true) {
      echo "<br />Abanar ";
    } else {
      echo "<br />Rosnar e latir ";
    }
  }
  function reagirIdadePeso($idade, $peso) {
    if ($idade < 5) {
      if ($peso < 10) {
        echo "<br />Abanar";
      } else {
        echo "<br />Latir";
      }
      } else {
      if ($peso < 10) {
        echo "<br />Rosnar";
      } else {
        echo "<br />Ignorar";
      }
    }
	}
}
  ?>
