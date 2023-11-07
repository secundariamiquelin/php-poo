<?php

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . "/src/PessoaFisica.php";

$pessoaFisica = new PessoaFisica
("Gabriel","gabriel.gabriel@gmail.com","99999999","2232232323",18);

//NÂO PRECISO DESSA PARTE COMENTADA POIS CHAMEI PELO PARAMETRO ACIMA
//Chamando esses métodos via função ao invés de "$pessoaFisica->name = "Gabriel";"
// $pessoaFisica->setNome("Gabriel");
// $pessoaFisica->setEmail("gabriel.gabriel@gmail.com");
// $pessoaFisica->setTelefone("99999999");
// $pessoaFisica->setCpf("2232232323");
// $pessoaFisica->setIdade(18);

//Não preciso mais dessa parte comentada pois fiz a mesma coisa no código acima por meio de método
// $pessoaFisica->name = "Gabriel";
// $pessoaFisica->email = "gabriel.gabriel@gmail.com";
// $pessoaFisica->cpf = "123323323323";
// $pessoaFisica->telefone = "99999999";
// $pessoaFisica->idade = 18;


dump($pessoaFisica::getInformation("Miquelin"));