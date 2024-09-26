<?php

echo"Bem vindo(a) ao Screen Match!";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Se beber não case";
$nomeFilme = "Spider Man: No Way Home";

//argv permite que eu entre com dados atraves do terminal ao executar o meu arquivo
$anoLancamento = 2022;

$quantidadeDeNotas = $argc -1;

$notas = [];
$somaDasNotas = 0;

for ($i=1; $i < $argc; $i++) { 
    $notas[$i-1] += (float) $argv[$i];
}       
// foreach ($notas as $nota) {
//     $somaDasNotas += $nota;
// }

$notaFilme = array_sum($notas)/$quantidadeDeNotas;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento > 2020;

echo "\nNome do Filme: $nomeFilme \nNota do Filme: $notaFilme \nAno de Lançamento: $anoLancamento \n";


if($anoLancamento > 2022){
    echo "Este filme é um lançamento.\n";
} elseif ($anoLancamento <= 2022 && $anoLancamento > 2020) {
    echo"Este filme não é um lançamento.\n";
} else {
    echo "Este filme não é um lançamento\n";
}

//match expression, mto boa
$genero = match ($nomeFilme) {
    "Spider Man: No Way Home" => "Super-Herói",
    "Top Gun - Maverick" => "Ação",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

//
//$resultado = $expressao1 ? $expressao2 : $expressao3;

echo "O genero deste filme é: $genero\n";

// $filmes = [
//     "nome" => "Kung Fu Panda 4", 
//     "lancamento" => 2023,
//     "nota" => $notaFilme,
//     "genero" => "Super Herói"
// ];