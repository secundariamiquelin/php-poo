<?php
require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . "/src/herancaPerFis.php";
require_once __DIR__ . "/src/herancaPerJur.php";
require_once __DIR__ . "/src/abstracao.php";
use Gabrielmiquelin\PooPhP\PessoaFisica;
use Gabrielmiquelin\PooPhP\PessoaJuridica;

$gabrielMiquelin = new PessoaFisica;
$gabrielMiquelin-> name =  "Miquelin";
$gabrielMiquelin-> age = 18;
$gabrielMiquelin->gender = "Masculino";
$gabrielMiquelin->cpf = "232.323.868-23";

$pj = new PessoaJuridica;
$pj->name = "Innova Tecnologia";
$pj->cnpj = "78.206.513/0001-40";

// dump($gabrielMiquelin,$pj);//Chamando
// dump($gabrielMiquelin->showName(),$pj->showName());


function  getName(Pessoa $class): void{
  $class->showaName();
  echo $class->getDocument();
}
getName($gabrielMiquelin);