<?php

$numberThree = 2;

function sumNumbers(int $numberOne, int $numberTwo): array
{
    // Utilizando uma variável fora do escopo da função
    global $numberThree;
    $value = 10;
    $soma = ($numberOne + $numberTwo) * $numberThree;
    return [
        'value' => $value,
        'soma' => $soma,
    ];
}
$result = sumNumbers(15, 10)['soma'];
var_dump($result);
print ('<br>');

$result = sumNumbers(15, 10);
var_dump($result);

function fatorial(int $number): int
{
    $fatorial = $number;
    for ($index=$number-1; $index>1; $index--) {
        $fatorial = $fatorial * $index;
    }
    return $fatorial;
}
print fatorial(3);
