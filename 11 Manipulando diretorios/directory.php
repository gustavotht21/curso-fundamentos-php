<?php


// Verifica se é um diretório
var_dump(is_dir('teste'));
print ('<br>');
var_dump(is_dir('test'));
print ('<hr>');

// Cria um diretório
var_dump(mkdir('uploads'));
print ('<hr>');

// Deleta um diretório
var_dump(rmdir('uploads'));
print ('<hr>');

// Mostra o diretório atual
var_dump(getcwd());
print ('<hr>');

// Scannear um diretório
var_dump(scandir('.'));
print ('<hr>');

// Scannear um diretório utilizando coringas de seleção
print ('<pre>');
var_dump(glob('../*.php'));