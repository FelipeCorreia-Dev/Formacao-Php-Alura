<?php

namespace ScreenMatch\Modelo;

interface Avaliavel //é uma class abstract sem propriedades
{
    public function avalia(float $nota):void;
    public function media():float;
}
