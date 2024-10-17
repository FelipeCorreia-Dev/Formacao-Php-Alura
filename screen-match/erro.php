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

echo $conversor->converte(avaliavel: $primeiroEpisodio);


