<?php

use ScreenMatch\Calculos\ConversorAvaliacaoEstrela;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Serie;
use ScreenMatch\Modelo\Genero;

require "autoload.php";

$serie = new Serie(
    nome: "jogos vorazes",
    anoLancamento:2023,
    genero: Genero::Acao,
    temporadas:3,
    episodiosPorTemporadas: 8,
    minutosPorEpisodio: 15
);

$primeiroEpisodio = new Episodio(
    serie: $serie,
    nome: "Piloto",
    numeroEpisodio: 1
);

$conversor = new ConversorAvaliacaoEstrela();

try {
    $primeiroEpisodio -> avalia(10);
    $primeiroEpisodio -> avalia(-10);

    echo $conversor->converte(avaliavel: $primeiroEpisodio);
} catch (\Exception $exception) {
    echo "Um problema aconteceu: " . $exception->getMessage();
}




