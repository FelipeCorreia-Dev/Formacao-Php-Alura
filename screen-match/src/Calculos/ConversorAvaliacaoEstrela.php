<?php

namespace ScreenMatch\Calculos;

use ArgumentCountError;
use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;

class ConversorAvaliacaoEstrela 
{
        public function converte(Avaliavel $avaliavel): float   
        {
            try {
                $nota = $avaliavel->media();

                return round($nota)/2;
            } catch (DivisionByZeroError $erro) { // podem haver mais do que 1 catch
                echo $erro->getMessage() . PHP_EOL;
                return 0;
            }
            
        }
}
