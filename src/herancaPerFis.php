<?php
// declare (strict_types=1);
namespace Gabrielmiquelin\PooPhp;

class PessoaFisica extends Pessoa{
   public string $name;
   public string $age;
   public string $gender;

   //Classe abstrata 
   public string $cpf;

   public function getDocument(): string{
       return $this->cpf;
   }
}