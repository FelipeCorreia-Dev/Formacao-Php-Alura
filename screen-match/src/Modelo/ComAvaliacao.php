<?php

namespace ScreenMatch\Modelo;

trait ComAvaliacao
{
    private array $notas = [];

    /**
     * Summary of avalia
     * @param float $nota
     * @throws \InvalidArgumentException se a nota for negativa ou maior que 10
     * @return void
     */
    public function avalia(float $nota):void 
    {   
        if($nota < 0 || $nota > 10){
            throw new \InvalidArgumentException("É necessário que a nota esteja entre 0 e 10");
        }
        $this->notas[] = $nota;
    }

    public function media():float
    {   
        $somaNotas = array_sum(array: $this->notas);
        $quantidadeNotas = count(value: $this->notas);

        return $somaNotas/$quantidadeNotas;
    }
}
