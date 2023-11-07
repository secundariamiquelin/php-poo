<?php 
namespace Gabrielmiquelin\PooPhp;
// declare (strict_types=1);

abstract class Pessoa{
  public string $name;

  public function showName(): void{
    echo $this->name . PHP_EOL;//. ponto faz a quebra de linha
 }

 abstract public function getDocument(): string;

}

