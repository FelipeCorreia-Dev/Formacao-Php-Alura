<?php

function operacaoMatematica(string $operacao, float $num1, float $num2): float {
    return match ($operacao) {
        "soma" => $num1 + $num2,
        "divisao" => $num1 / $num2,
        "multiplicacao" => $num1 * $num2,
        "subtracao" => $num1 - $num2
    };
}

$resultado = operacaoMatematica(operacao: "multiplicacao", num1: 3.5, num2: 5);
echo $resultado;