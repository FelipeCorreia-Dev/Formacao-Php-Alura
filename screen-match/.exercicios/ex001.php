<?php

enum TipoConta
{
    case Poupanca;
    case Universitaria;
    case Investimento;
    case Corrente;

    public function verificaTaxa(): bool
    {
        return match($this) {
            TipoConta::Corrente, TipoConta::Investimento => true,
            TipoConta::Poupanca, TipoConta::Universitaria => false,
        }; 
    }
}