<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Seja Bem-vindo(a) ao Screen Match\n";

$filme = new Filme(
    nome: "Tico do pé grande",
    anoLancamento: 2024,
    genero: Genero::Comedia,
);

$filme -> avalia(nota: 10);
$filme -> avalia(nota: 10);
$filme -> avalia(nota: 5);
$filme -> avalia(nota: 5);

var_dump(value: $filme);
