<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Seja Bem-vindo(a) ao Screen Match\n";

$filme = new Filme();

echo $filme->acessaNome() . " \n";
echo $filme->acessaGenero() . "\n";
echo $filme->acessaAnoLancamento() . "\n";

/*$filme -> nome = "Thor Ragnarok"; 
$filme -> anoLancamento = 2021; 
$filme -> genero = "Super-Herói";*/

$filme -> avalia(nota: 10);
$filme -> avalia(nota: 10);
$filme -> avalia(nota: 5);
$filme -> avalia(nota: 5);

// var_dump($filme);

echo $filme->media() . "\n";
echo $filme->acessaAnoLancamento() . "\n";

