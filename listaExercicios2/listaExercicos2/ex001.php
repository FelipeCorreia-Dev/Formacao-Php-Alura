<?php

$notas = [8.5, 9.2, 7.8, 9.0, 8.8];
rsort(array: $notas);

for ($i = 0; $i < 3;$i++){
    echo "As três maiores notas são " . $notas[$i] . PHP_EOL;
}
