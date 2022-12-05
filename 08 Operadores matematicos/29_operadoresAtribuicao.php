<?php

// De  forma enxuta
$number = 10;
print ("{$number} <br>");

$number += 5;
print ("{$number} <br>");

$number -= 10;
print ("{$number} <br>");

$number *= 2;
print ("{$number} <br>");

$number /= 2;
print ("{$number} <br>");

print ('<hr>');

// Incremento e decremento

// Pós incremento: Primeiramente ele devolve o valor para depois realizar o incremento/decremento
$numberA = 2;
$numberB = 2;
print ("A = {$numberA} <br> B = {$numberB} <br>");

print "{$numberA} + {$numberB} = " . ($numberA + $numberB++) . "<br>";
print "Pós decremento = " . ($numberA + $numberB) . "<br>";

print "{$numberA} + {$numberB} = " . ($numberA + $numberB--) . "<br>";
print "Pós decremento = " . ($numberA + $numberB) . "<br>";

print "{$numberA} + {$numberB} = " . ($numberA + $numberB) . "<br>";

print ('<hr>');
// Pré incremento: Primeiramente ele realiza o incremento/decremento para depois devolver o valor
$numberA = 2;
$numberB = 2;
print ("A = {$numberA} <br> B = {$numberB} <br>");

print "{$numberA} + {$numberB} = " . ($numberA + ++$numberB) . "<br>";
print "Pré decremento = " . ($numberA + $numberB) . "<br>";

print "{$numberA} + {$numberB} = " . ($numberA + --$numberB) . "<br>";
print "Pré decremento = " . ($numberA + $numberB) . "<br>";

print "{$numberA} + {$numberB} = " . ($numberA + $numberB) . "<br>";

