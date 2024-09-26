<?php

function calculadoraImc(float $peso, float $altura): float {
  return $peso/($altura**2);
}

$imc = calculadoraImc(peso: 80, altura: 1.78);

function geraMensagem(float $imc): void {
    if ($imc < 18.5) {
        echo "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 25) {
        echo "Peso normal";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "Excesso de peso";
    } else {
        echo "Obesidade";
    }
}

geraMensagem( imc: $imc);