<?php

// Classe Carro
class Carro {
  public $marca;
  public $modelo;
  public $ano;

  public function __construct($marca, $modelo, $ano) {
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->ano = $ano;
  }
}

// Classe CarroEsportivo que herda de Carro
class CarroEsportivo extends Carro {
  public function acelerar() {
      echo "Acelerando o carro esportivo!";
  }
}

// Criando um objeto Carro
$meuCarro = new Carro("Toyota", "Corolla", 2020);

// Criando um objeto CarroEsportivo
$meuCarroEsportivo = new CarroEsportivo("Ferrari", "F40", 2022);
$meuCarroEsportivo->acelerar(); // Chama o método específico de CarroEsportivo
