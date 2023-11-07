<?php  //Informando que é um arquivo php

declare(strict_types=1);//Forcei a tipagem desse arquivo php

class PessoaFisica{
   
   const OBJECT_TYPE = "Ser humano";


  //Aqui fica as propriedades e métodos
  private static string $nome ; // -> propriedade
  private string $email;
  private string $telefone;
  private string $cpf;
  private int $idade;
  
  public function __construct(string $nome,string $email,string $telefone,string $cpf,int $idade){
    // $this-> nome = $nome;
    self::$nome = $nome;//Para executar o objetc_type
    $this-> email = $email;
    $this-> telefone = $telefone;
    $this-> cpf = $cpf;
    $this-> idade = $idade;
  }

  public function setEmail(string $email): static{
    $this->email = $email;

      return $this;
  } 

  public static function getInformation(string $nome): string{

      self::$nome = $nome;
      return self::$nome . " - " . self::OBJECT_TYPE;//"." ponto serve para concatenar
  }
}

  //NÃO PRECISO MAIS DESSE CÓDIGO COMENTADO POIS FIZ ELE DE OUTRA FORMA (ali encima)
  // CRIANDO UM MÈTODO
  // Crei uma função de visibilidade publica cuja seu nome é "setName" (void pois é uma função vazia)
//   public function setNome(string $nome):void{
//      $this-> nome = $nome;
//   }

//   public function setEmail(string $email):void{
//     $this-> email = $email;
//  }

//  public function setTelefone(string $telefone):void{
//   $this-> telefone = $telefone;
// }

// public function setCpf(string $cpf):void{
//   $this-> cpf = $cpf;
// }

// public function setIdade(int $idade):void{
//   $this-> idade = $idade;
// }
// }

//ERA PRA TER REMOVIDO ESSA PARTE COMENTADA, mas dexei comentada para mim não esquecer o que esses códigos faz

// //Declarando Variável
// $pessoaFisica = new PessoaFisica();

// var_dump($pessoaFisica);//para imprimir a estrtutura do objeto utilizando "var_dump"

