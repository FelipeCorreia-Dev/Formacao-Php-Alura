<?php

spl_autoload_register(function(string $className) {
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $caminho = str_replace('ScreenMatch', 'src', $caminho) . '.php';
    // echo "Tentando carregar: $caminho\n";
    
    if (file_exists($caminho)) {
        require $caminho;
    } else {
        echo "Arquivo não encontrado: " . $caminho;
    }
}); 