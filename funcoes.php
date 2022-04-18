<?php

function sacar(array $conta, float $valorASacar): array 
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem(mensagem:"Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;    
    }

    return $conta;
}

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorADepositar): array
{
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem(mensagem: "Depósitos precisam ser positivos");
    }
    return $conta;
}

// & significa que estou pegando o endereço completo da conta, só assim vai deixar as letas maiúsculas
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}