<?php

//$var1 = 'Something';
//$var2 = 'Other';
//
//// Concatenando utilizando ponto
//print ($var1 . $var2);
//print ('<hr>');
//
//$var3 = $var1 . $var2;
//print ($var3);
//print ('<hr>');

$name = 'Gustavo Borges';
$company = 'Bg Enterprise';

//print ('O ' . $name . ' é fundador da empresa: ' . $company);
//print ("O $name é o fundador da empresa: $company");

// Para evitar conflitos, concatena as variáveis utilizando chaves:
print ("O {$name} é o fundador da empresa: {$company}");
