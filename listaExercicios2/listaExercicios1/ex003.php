<?php

function calculaTempratura(float $celsius): float {
    return $celsius * 1.8 + 32;
}

$temperaturaEmCelsius = 30.4;

$temperaturaEmFahrenheit = calculaTempratura(celsius: $temperaturaEmCelsius);

function exibeMensagem(float $temperaturaEmCelsius,float $temperaturaEmFahrenheit): void {
    echo "A temperatura de $temperaturaEmCelsius Celsius é equivalente a $temperaturaEmFahrenheit Fahrenheit\n";
}

exibeMensagem(temperaturaEmCelsius:$temperaturaEmCelsius, temperaturaEmFahrenheit: $temperaturaEmFahrenheit);



