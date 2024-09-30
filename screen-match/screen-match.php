<?php

require __DIR__ . "/funcoes.php";

echo"Bem vindo(a) ao Screen Match!";

$nomeFilme = "Top Gun - Maverick";
// $nomeFilme = "Se beber não case";
// $nomeFilme = "Spider Man: No Way Home";

//argv permite que eu entre com dados atraves do terminal ao executar o meu arquivo
$anoLancamento = 2022;

$quantidadeDeNotas = $argc -1;

$notas = [];
$somaDasNotas = 0;

for ($i=1; $i < $argc; $i++) { 
    $notas[$i-1] = (float) $argv[$i];
}       
// foreach ($notas as $nota) {
//     $somaDasNotas += $nota;
// }

$notaFilme = array_sum(array: $notas)/$quantidadeDeNotas;

$planoPrime = true;
incluidoNoPlano(planoPrime: $planoPrime, ano: 2022);

//match expression, mto boa
$genero = match ($nomeFilme) {
    "Spider Man: No Way Home" => "Super-Herói",
    "Top Gun - Maverick" => "Ação",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

exibeMensagemLancamento(ano: 2022);
exibeMensagemInformacoes(ano: $anoLancamento, nome: $nomeFilme, nota: $notaFilme, genero: $genero);

$filmes = [
    "nome" => "Kung Fu Panda 4", 
    "lancamento" => 2023,
    "nota" => $notaFilme,
    "genero" => "Super Heroi"
];

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo $menorNota . PHP_EOL;

var_dump($filmes['nome']);
$posicaoDoisPontos = strpos($filmes['nome'], '4');
var_dump($posicaoDoisPontos);
var_dump(substr($filmes['nome'], 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filmes);

file_put_contents(__DIR__ . '/filmes.json', $filmeComoStringJson);
