<?php

require __DIR__ ."/src/Calculos/CalculadoraDeMaratona.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Episodio.php";
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
    temporadas: 3, 
    episodiosPorTemporadas: 8, 
    minutosPorEpisodio: 40
    );

$episodio1 = new Episodio(
    serie: $novaSerie,
    nome: "Piloto",
    numeroEpisodio: 1
);

$novaSerie -> avalia(nota: 10);
$novaSerie -> avalia(nota: 5);

echo $novaSerie -> media() . PHP_EOL;

$calculadora = new CalculadoraDeMaraotona();

$calculadora->inclui(titulo:$filme);
$calculadora->inclui(titulo:$novaSerie);
$duracaoTotal = $calculadora->duracaoTotal() ;
echo $duracaoTotal. PHP_EOL;
