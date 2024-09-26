<?php

function exibeMensagem($titularConta, $saldo) {
    echo "*************\n";
    echo "Titular: $titularConta\n";
    echo "Saldo Atual: R$ $saldo\n";
    echo "*************\n\n";
    echo "1. Consultar saldo atual \n2. Sacar valor \n3. Depositar valor \n4. Sair\n\n";
}

$saldo = 1000;
$titularConta = 'Felipe Correia';

do {
    exibeMensagem($titularConta, $saldo);
    echo"Escolha uma opção: ";

    $numero = (float) fgets(STDIN);

    switch ($numero) {
        case 1:
            exibeMensagem($titularConta, $saldo);
            break;

        case 2:
            echo "Qual valor deseja sacar?\n";
            $valorSaque = (float) fgets(STDIN);
            if ($valorSaque > $saldo) {
                echo "Não foi possível fazer o saque";
            } else {
                $saldo -= $valorSaque;
                $numero = 1;
            }
            break;

        case 3:
            echo "Qual valor deseja depositar?\n";
            $valorDeposito = (float) fgets(STDIN);
            if ($valorDeposito < 0) {
                echo "Não é possivel depositar valores negativos\n";
            } else {
                $saldo += $valorDeposito;
                echo "Depósito feito com sucesso\n";
            }
            break;

        case 4:
            echo "Adeus!\n";
            break;

        default:
            echo "Opção Inválida\n";
            break;
    }
} while ($numero != 4);
