<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Avaliavel;

class ConversorAvaliacaoEstrela 
{
        public function converte(Avaliavel $avaliavel): float   
        {
            $nota = $avaliavel->media();
            return round($nota)/2;
        }
}
