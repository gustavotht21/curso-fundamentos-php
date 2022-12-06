<?php

// Abre o arquivo
$file = fopen('login.txt', 'a+');

// Percorre todas as linhas do arquivo
while (! feof($file)) {
    // Exibe o conteúdo da linha
    print fgets($file, 4096);
    print ('<hr>');
}
// Fecha o arquivo
fclose($file);
