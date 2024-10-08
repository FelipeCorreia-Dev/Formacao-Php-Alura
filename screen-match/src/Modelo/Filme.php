<?php

class Filme {

    private array $notas;

    public function __construct(
        private readonly string $nome,
        private readonly int $anoLancamento,
        private readonly Genero $genero,
    )
    {
        $this->notas = [];    
    }

    public function avalia(float $nota):void 
    {
        $this->notas[] = $nota;
    }

    public function media():float
    {
        $somaNotas = array_sum(array: $this->notas);
        $quantidadeNotas = count(value: $this->notas);

        return $somaNotas/$quantidadeNotas;
    }

    //ANO LANCAMENTO
    //METODO GETTER = PEGA INFORMAÇÃO DESEJADA
    public function acessaAnoLancamento(): int 
    {
        return $this->anoLancamento;
    }
    //METODO SETTER = DEFINE A INFORMAÇÃO
    // public function defineAnoLancamento(int $anoLancamento): void 
    // {   
    //     if ($anoLancamento > 0) {
    //         $this->anoLancamento = $anoLancamento;
    //     }
    // }

    //NOME
    public function acessaNome():string 
    {
        return $this->nome;    
    }

    //GêNERO
    public function acessaGenero():Genero 
    {
        return $this->genero;    
    }
}

//metodo = função dentro de uma classe