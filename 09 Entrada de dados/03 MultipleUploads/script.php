<?php

$files = $_FILES['images'];
$path = 'uploads/images';

// Verifica a existência do path e o cria, se não.
if (! is_dir($path)) {
    mkdir('uploads');
    mkdir($path);
}

// Upload dos arquivos
for ($index=0; $index<count($files['name']); $index++) {
    $numberName = $index + 1;
    if ( move_uploaded_file($files['tmp_name'][$index], $path . $files['name'][$index])) {
        print ("Sucesso ao mover o arquivo {$numberName}");
    } else {
        print ("Algo deu errado ao mover o arquivo {$numberName}");
        print ('<br>');
    }
}