<?php

$content = 'Algo aqui
Banana
';
$fileName = 'test.txt';

if (file_exists($fileName)) {
    // Limpa o arquivo e adiciona o conteúdo
    file_put_contents('test.txt', $content);

    var_dump(file_get_contents($fileName));
} else {
    print ('Arquivo inexiste');
}

