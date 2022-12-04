<?php

$cart = ['Arroz', 'Maçã', 'Banana', 'Mamão'];

print("<pre>");
var_dump($cart);
print("<hr>");

// Remove último elemento
array_pop($cart);
print("<pre>");
var_dump($cart);
print ('<hr>');

// Remove primeiro elemento
array_shift($cart);
print ('<pre>');
var_dump($cart);
print ('<hr>');

// Remove um elemento específico
unset($cart[0]);
print ('<pre>');
var_dump($cart);
print ('<hr>');

// Adiciona um elemento na última posição
array_push($cart, 'Cereal');
print ('<pre>');
var_dump($cart);
print ('<hr>');

// Também pode ser feito da seguinte forma:
$cart[] = 'Achocolatado';
print ('<pre>');
var_dump($cart);
print ('<hr>');

// Adiciona um elemento na primeira posição
array_unshift($cart, 'Polpa de maracujá');
print ('<pre>');
var_dump($cart);
print ('<hr>');

// Remover elementos repetidos em um array
$cart[] = 'Cereal';
print ('<pre>');
var_dump($cart);
print ('<hr>');

$cart = array_unique($cart);
print ('<pre>');
var_dump($cart);
print ('<hr>');