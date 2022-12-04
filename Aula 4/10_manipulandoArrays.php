<?php

$cart = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Banana',
    3 => 'Cereal'
];

// Ordena em ordem decrescente o array
arsort($cart);
print ('<pre>');
var_dump($cart);
print ('<hr>');

// Ordena em ordem crescente o array
asort($cart);
print ('<pre>');
var_dump($cart);
print ('<hr>');

// Ordena em ordem crescente o array juntamente com as chaves dos valores
sort($cart);
print ('<pre>');
var_dump($cart);
print ('<hr>');