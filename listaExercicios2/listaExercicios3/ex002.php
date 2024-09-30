<?php
$nomeArquivo = __DIR__ . 'teste.txt';
$novaFrase = "\nPHP é incrível!";

 // Abre o arquivo para escrita no final
$arquivo = fopen($nomeArquivo, 'a');
 // Escreve no arquivo
fwrite($arquivo, $novaFrase);
 // Fecha o arquivo
fclose($arquivo);