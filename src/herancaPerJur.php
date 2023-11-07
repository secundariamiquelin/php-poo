<?php 
namespace Gabrielmiquelin\PooPhp;
// declare (strict_types=1);

//Exetendendo herança de pessoaFisica
class PessoaJuridica extends Pessoa{
     //Classe abstrata 
     public string $cnpj;

     public function getDocument(): string{
          return $this->cnpj;
      }
}