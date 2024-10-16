<?php

namespace ScreenMatch\Modelo;

abstract class Titulo implements Avaliavel{

    use ComAvaliacao;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
    )
    {
  
    }

    abstract public function duracaoEmMinutos(): int;

    //ANO LANCAMENTO
    //METODO GETTER = PEGA INFORMAÇÃO DESEJADA
    public function acessaAnoLancamento(): int 
    {
        return $this->anoLancamento;
    }

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

    //METODO SETTER = DEFINE A INFORMAÇÃO
    // public function defineAnoLancamento(int $anoLancamento): void 
    // {   
    //     if ($anoLancamento > 0) {
    //         $this->anoLancamento = $anoLancamento;
    //     }
    // }

//metodo = função dentro de uma classe
