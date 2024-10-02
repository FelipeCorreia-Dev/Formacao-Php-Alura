<?php


function exibeMensagemLancamento(int $ano): void 
{
    if($ano > 2022){
        echo "Este filme é um lançamento.\n";
    } elseif ($ano <= 2022 && $ano > 2020) {
        echo"Este filme não é um lançamento.\n";
    } else {
        echo "Este filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $ano ): bool 
{
    return $planoPrime || $ano > 2020;
} 

function exibeMensagemInformacoes(int $ano,string $nome, int $nota, string $genero): void
{
    echo "\nNome do Filme: $nome \nNota do Filme: $nota \nAno de Lançamento: $ano \nO genero deste filme é: $genero\n";
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero):Filme 
{
    $flime = new Filme();

    $flime->nome = $nome;
    $flime->anoLancamento = $anoLancamento;
    $flime->nota = $nota;
    $flime->genero = $genero;
    
    return $flime;
}