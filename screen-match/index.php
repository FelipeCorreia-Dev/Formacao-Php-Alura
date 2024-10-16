<?php

spl_autoload_register(function(string $className){
    $caminho = str_replace(search: "ScreenMatch", replace: "src", subject: $className) . ".php";
    $caminho = str_replace(search: '//', replace: DIRECTORY_SEPARATOR, subject: $caminho);
    require_once __DIR__. DIRECTORY_SEPARATOR. $caminho;
});

use ScreenMatch\Modelo\{
    Filme, Serie, Episodio, Genero
};

use ScreenMatch\Calculos\{
    CalculadoraDeMaraotona, ConversorAvaliacaoEstrela   
};

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
$novaSerie -> avalia(nota: 8);

echo $novaSerie -> media() . PHP_EOL;

$calculadora = new CalculadoraDeMaraotona();

$calculadora->inclui(titulo:$filme);
$calculadora->inclui(titulo:$novaSerie);
$duracaoTotal = $calculadora->duracaoTotal() ;
echo "Para essa maratona, você precisa de $duracaoTotal minutos". PHP_EOL;

$conversorDeEstrela = new ConversorAvaliacaoEstrela();
echo "Esta serie é avaliado em " . $conversorDeEstrela->converte(avaliavel: $novaSerie) . " estrelas\n";

