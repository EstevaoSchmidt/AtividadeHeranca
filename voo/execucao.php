<?php

require_once("modelo/Comissario.php");
require_once("modelo/Passageiro.php");
require_once("modelo/Piloto.php");

$pessoas = array();

do {

echo("***Voo Maneiro-Airlines\n");
echo("(1)Cadastar Pessoa\n");
echo("(2)Excluir Pessoa\n");
echo("(3)Listar Pessoas de um Voo\n");
echo("(4)Totalizar Salario dos Funcionarios de uma compania\n");
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
                $piloto->setHorarioDeEmbarque(readline("Informe o horário de embarque: "));
                $piloto->setTempoDeVoo(readline("Informe a duração do voo: "));
                $piloto->setNomeCompania(readline("Informe o nome da Compania: "));
                $piloto->setSalario(readline("Informe o seu salario: "));
                $piloto->setAvioesPermitidos(readline("Informe os aviões permitidos: "));
                $piloto->setTipoDeLicenca(readline("Informe o tipo da Licença: "));
                array_push($pessoas, $piloto);

                break;
            
            case 2:

                $passageiro = new Passageiro();
                $passageiro->setIdade(readline("Informe a Idade: "));
                $passageiro->setCpf(readline("Informe o CPF: "));
                $passageiro->setNome(readline("Informe o Nome: "));
                $passageiro->setNumVoo(readline("Informe o Número do Voo: "));
                $passageiro->setHorarioDeEmbarque(readline("Informe o Horário de Embarque: "));
                $passageiro->setDestino(readline("Informe o destino: "));
                $passageiro->setNomeAssento(readline("Informe o seu Assento: "));
                $passageiro->setClasse(readline("Informe qual é a sua classe: "));
                $passageiro->setCliente(readline("Informe o tipo de cliente: "));
                array_push($pessoas, $passageiro);
                

                break;

            case 3:

                $comissario = new Comissario();
                $comissario->setIdade(readline("Informe a Idade: "));
                $comissario->setCpf(readline("Informe o CPF: "));
                $comissario->setNome(readline("Informe o Nome: "));
                $comissario->setNumVoo(readline("Informe o Número do Voo: "));
                $comissario->setHorarioDeEmbarque(readline("Informe o Horário de Embarque: "));
                $comissario->setTempoDeVoo(readline("Informe qual é a duração voo: "));
                $comissario->setNomeCompania(readline("Informe o nome da Compania: "));
                $comissario->setSalario(readline("Informe o seu salario: "));
                $comissario->setServico(readline("Informe o tipo de serviço: "));
                $comissario->setAvaliacao(readline("Informe a avaliação do Comissario: "));
                $comissario->setTipoVoo(readline("Informe se o voo é nacional ou internacional:"));
                array_push($pessoas, $comissario);

                break;
            
            default:
                break;

        }

        break;

        case 2:

            $indice = readline("Informe o índice da pessoa a ser excluida: ");
            array_splice($pessoas, $indice, 1);

            break;
        
        case 3:

            $numVoo = readline("Informe o número do voo: ");

            foreach($pessoas as $p){

                if ($p->getNumVoo() == $numVoo){

                    echo $p;

                }

            }

            break;

        case 4:

            $compania = readline("Informe o nome da compania: ");
            $totalSalario = 0;

            foreach($pessoas as $p){

                if($p->getNomeCompania() == $compania){

                    $totalSalario += $p->getSalario();

                }

            }

            echo "A compania " . $compania . " gasta " . $totalSalario . " R$ com seus funcionarios todos os meses.\n";

            break;

}

} while($opcao != 0);