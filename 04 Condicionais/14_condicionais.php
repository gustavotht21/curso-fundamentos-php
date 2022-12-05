<?php

$value = 16;
$valueTwo = 16;

//// Comparando o valor. Para uma única linha de retorno, o if pode ser escrito sem as chaves
//if ($value == $valueTwo && $value == 16) {
//    print ('Value é igual a valueTwo');
//}
//// Também pode ser feito dessa maneira:
//if ($value == $valueTwo && $value == 16):
//    print ('Value é igual a valueTwo');
//endif;
//
//// Else:

//if ($value != $valueTwo)
//    print ('Os valores não são iguais');
//else
//    print ('Os valores são iguais');

// Else if:
if ($value == 0)
    print ('O valor é igual a zero');
elseif ($value < 0)
    print ('O valor é menor que zero');
else
    print ('O valor é maior que zero');

