<?php

class Filme {
    private string $nome = "Nome do filme";
    private int $anoLancamento = 2024;
    private string $genero = "Genero do filme";
    private array $notas = [];

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
    public function defineAnoLancamento(int $anoLancamento): void 
    {   
        if ($anoLancamento > 0) {
            $this->anoLancamento = $anoLancamento;
        }
    }

    //NOME
    public function acessaNome():string 
    {
        return $this->nome;    
    }
    public function defineNome(string $nome):void
    {
        $this->nome = $nome;
    }

    //GêNERO
    public function acessaGenero():string 
    {
        return $this->genero;    
    }
    public function defineGenero(string $genero):void 
    {
        $this->genero = $genero;    
    }
}

//metodo = função dentro de uma classe