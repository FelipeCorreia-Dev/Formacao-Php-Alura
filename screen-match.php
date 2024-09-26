<?php

function exibeMensagemLancamento(int $ano): void {
    if($ano > 2022){
        echo "Este filme é um lançamento.\n";
    } elseif ($ano <= 2022 && $ano > 2020) {
        echo"Este filme não é um lançamento.\n";
    } else {
        echo "Este filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $ano ): bool {
    return $planoPrime || $ano > 2020;
} 

function exibeMensagemInformacoes(int $ano,string $nome, int $nota, string $genero): void{
    echo "\nNome do Filme: $nome \nNota do Filme: $nota \nAno de Lançamento: $ano \nO genero deste filme é: $genero\n";
}
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

exibeMensagemInformacoes($anoLancamento, $nomeFilme, $notaFilme, $genero);
exibeMensagemLancamento(2022);

// $filmes = [
//     "nome" => "Kung Fu Panda 4", 
//     "lancamento" => 2023,
//     "nota" => $notaFilme,
//     "genero" => "Super Herói"
// ];