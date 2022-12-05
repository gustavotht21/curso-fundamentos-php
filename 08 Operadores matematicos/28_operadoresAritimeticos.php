<?php

$numberOne = 15;
$numberTwo = 5;

$result = $numberOne + $numberTwo;
print ("O resultado da soma de {$numberOne} + {$numberTwo} é igual a: {$result}");
print ('<hr>');
$result = $numberOne - $numberTwo;
print ("O resultado da subtração de {$numberOne} - {$numberTwo} é igual a: {$result}");
print ('<hr>');
$result = $numberOne * $numberTwo;
print ("O resultado da multiplicação de {$numberOne} * {$numberTwo} é igual a: {$result}");
print ('<hr>');
$result = $numberOne / $numberTwo;
print ("O resultado da divisão de {$numberOne} / {$numberTwo} é igual a: {$result}");
print ('<hr>');
$result = $numberOne % $numberTwo;
print ("O resto da divisão de {$numberOne} / {$numberTwo} é igual a: {$result}");
print ('<hr>');

function checksOddPair($value) {
    if ($value % 2 == 0)
        return 'O valor é par';
    else
        return 'O valor é ímpar';
}
print checksOddPair(14);
print ('<br>');
print checksOddPair(13);
