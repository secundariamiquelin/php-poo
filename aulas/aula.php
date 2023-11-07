<?php

// Em PHP, uma classe é um modelo ou plano de fundo para criar objetos. Os objetos são instâncias de classes. Aqui está um exemplo simples de como definir uma classe em PHP:

class Carro {
    // Propridades ou atributos
    public $marca;
    public $modelo;
    public $ano;

    //Métodos 
    public function ligar(){
      echo "O carro está ligado!";
    }
    public function desligar(){
      echo "O carro está desligado!";
    }
}

// Instanciando um Objeto:
// Agora, vamos criar um objeto a partir da classe Carro:
$meuCarro = new Carro();
$meuCarro->marca = "Toyota";
$meuCarro->modelo = "Corolla";
$meuCarro->ano = 2020;
// Acessando Propriedades e Métodos:
echo "Marca do carro: " . $meuCarro->marca;
$meuCarro->ligar();