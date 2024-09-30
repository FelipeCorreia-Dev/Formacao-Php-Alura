<?php

function ordenaArray(&$array):array {
    sort(array: $array);
    return $array;
}
$array = ["banana", "abacaxi", "laranja", "uva"];

ordenaArray($array);
print_r($array);
