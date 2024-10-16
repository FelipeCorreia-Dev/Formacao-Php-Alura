<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Titulo;

class CalculadoraDeMaraotona
{
    private int $duracaoMaratona = 0;
    public function inclui(Titulo $titulo):void
    {
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    public function duracaoTotal():int
    {
        return $this->duracaoMaratona;    
    }
}
