<?php

abstract class Titulo {

    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
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

    abstract public function duracaoEmMinutos(): int;

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
