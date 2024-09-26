<?php

$peso = $argv[1];
$altura = $argv[2];

$imc = $peso/($altura**2);

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Peso normal";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Excesso de peso";
} else {
    echo "Obesidade";
}