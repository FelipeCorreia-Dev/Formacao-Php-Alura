<?php

class Serie extends Titulo {
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $teporadas,
        public readonly int $episodiosPorTemporadas,
        public readonly int $minutosPorEpisodio,
    )
    {
        parent::__construct(nome: $nome, anoLancamento: $anoLancamento, genero: $genero);
    }
}