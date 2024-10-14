<?php

class Episodio implements Avaliavel{
    private array $notas;

    public function __construct(
        public readonly Serie $serie,
        public readonly string $nome,
        public readonly int $numeroEpisodio
    )
    {
        $this->notas = [];
    }

    public function media():float
    {
        $somaNotas = array_sum(array: $this->notas);
        $quantidadeNotas = count(value: $this->notas);

        return $somaNotas/$quantidadeNotas;
    }

    public function avalia(float $nota):void 
    {
        $this->notas[] = $nota;
    }
}