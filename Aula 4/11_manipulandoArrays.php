<?php

$ages = [12, 54, 33, 78, 9, 17, 46, 41, 87];

// Printar o último elemento de um array
print ('<pre>');
print (end($ages));
print ('<hr>');

// Filtrar um array
$agesFiltered = array_filter($ages, function ($age) {
    // Array filter passa por todos os elementos do array parâmetro e retorna apenas os valores maiores ou iguais a 18
    return $age >= 18;
});

print ('<pre>');
var_dump($agesFiltered);
print ('<hr>');

// Mapear array
$names = ['Gustavo', 'BG Enterprise', 'Company'];

// O array map passa por todos os elementos do array e retorna seus valores em maiúsculo. Primeiro escrevemos a função de callback e depois passamos o array de parâmetro
$names = array_map(function ($name) {
    return strtoupper($name);
}, $names);

print ('<pre>');
var_dump($names);
print ('<hr>');

// O trecho acima pode ser feito também utilizando uma função separada de callback:
$names = array_map('applyToLower', $names);

function applyToLower ($value) {
    return strtolower($value);
}

print ('<pre>');
var_dump($names);
print ('<hr>');