<?php

$name = 'Gustavo Borges';

// Verifica se uma variável existe
if (isset($name))
    print $name;
else
    print ('A variável não existe');

print ('<hr>');
// Deleta uma variável da memória
unset($name);

if (isset($name))
    print $name;
else
    print ('A variável não existe');