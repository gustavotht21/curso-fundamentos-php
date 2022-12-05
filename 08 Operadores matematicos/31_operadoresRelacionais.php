<?php

$numberA = 5;
$numberB = '2';

if ($numberA === $numberB)
    print 'IF - Igual tanto em valor quanto em tipo';
elseif ($numberA == $numberB)
    print 'ELSEIF - Igual em valor';
elseif ($numberA !== $numberB)
    print 'ELSEIF - Diferente tanto em valor quanto em tipo';
elseif ($numberA != $numberB)
    print 'ELSEIF - Diferente em valor';
elseif ($numberA < $numberB)
    print 'ELSEIF - A menor que B';
elseif ($numberA > $numberB)
    print 'ELSEIF - A maior que B';
elseif ($numberA <= $numberB)
    print 'ELSEIF - A menor ou igual a B';
elseif ($numberA >= $numberB)
    print 'ELSEIF - A maior ou igual a B';
else
    print 'ELSE';

