<?php

require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Seja Bem-vindo(a) ao Screen Match\n";

$filme = new Filme(
    nome: "Tico do pé grande",
    anoLancamento: 2024,
    genero: Genero::Comedia,
    duracaoEmMinutos: 180,
);

$filme -> avalia(nota: 10);
$filme -> avalia(nota: 10);
$filme -> avalia(nota: 5);
$filme -> avalia(nota: 5);

var_dump(value: $filme) . PHP_EOL;

$novaSerie =  new Serie(
    nome: "Taugus", 
    anoLancamento: 2006, 
    genero: Genero:: Drama, 
    teporadas: 3, 
    episodiosPorTemporadas: 8, 
    minutosPorEpisodio: 40
    );

$novaSerie -> avalia(10);
$novaSerie -> avalia(5);

echo $novaSerie -> media();
