<?php

// Função simples
function testFunction(): String // Retorno da função: Texto
{
    return ('Texto imprimido em uma função <br>');
}
//print testFunction();

// Função com parâmetros
function sumNumbers(int $numberOne, int $numberTwo): int
{
    return ($numberOne + $numberTwo);
}
//$numberOne = 15;
//$numberTwo = 10;
//print sumNumbers($numberOne, $numberTwo);

// Função com parâmetro opcional
function sumTwo (int $numberOne, int $numberTwo, $numberThree = 2): int
{
    return ($numberOne + $numberTwo) * $numberThree;
}
print sumTwo(5, 5, 3);

