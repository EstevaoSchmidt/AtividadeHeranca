<?php

require_once("modelo/Comissario.php");
require_once("modelo/Funcionario.php");
require_once("modelo/Passageiro.php");
require_once("modelo/Pessoa.php");
require_once("modelo/Piloto.php");

$pilotos = array();

do {

echo("***Voo Maneiro-Airlines\n");
echo("(1)Cadastar Pessoa\n");
echo("(2)Excluir Pessoa\n");
echo("(3)Listar Pessoas de um Voo\n");
echo("(0)Sair\n");
$opcao = readline("Informe uma Opção: ");

switch($opcao){

    case 1:
        echo("(1)Cadastar Piloto\n");
        echo("(2)Cadastar Passageiro\n");
        echo("(3)Cadastar Comissario\n");
        echo("(0)Sair\n");
        $opcao = readline("Informe uma Opção: ");

        switch($opcao){

            case 1:
                $piloto = new Piloto();
                $piloto->setIdade(readline("Informe a Idade: "));
                $piloto->setCpf(readline("Informe o CPF: "));
                $piloto->setNome(readline("Informe o Nome: "));
                $piloto->setNumVoo(readline("Informe o Número do Voo: "));
                $piloto->setHorarioDeEmbarque("Informe o Horário de Embarque: ");
                $piloto->setTempoDeVoo("Informe qual é a duração voo: ");
                


        }

        break;

}

} while();