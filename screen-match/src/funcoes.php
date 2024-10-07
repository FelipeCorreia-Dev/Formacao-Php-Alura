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

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero):Filme 
{
    $flime = new Filme();

    $flime->nome = $nome;
    $flime->anoLancamento = $anoLancamento;
    $flime->notas = $nota;
    $flime->genero = $genero;
    
    return $flime;
}
