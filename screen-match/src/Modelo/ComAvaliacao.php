<?php

trait ComAvaliacao
{
    private array $notas = [];

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
