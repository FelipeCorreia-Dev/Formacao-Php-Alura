<?php

$contaBancaria = [
    "cliente1" => [
        "nome"=> "Jeff",
        "idade"=> "48",
        "saldo"=> 500000
    ],
    "cliente2" => [
        "nome"=> "Jeffão",
        "idade"=> "48",
        "saldo"=> 500000
    ],
    "cliente3" => [
        "nome"=> "Jeffinho",
        "idade"=> "48",
        "saldo"=> 500000
    ],
];

foreach ($contaBancaria as $conta){
    echo $conta['nome'] . ' possui ' . $conta['saldo'] . ' reais de saldo. ' . PHP_EOL;
}

// var_dump($contaBancaria);