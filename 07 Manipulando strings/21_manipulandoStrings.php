<?php

/*
$state = 'Porto Velho/RO';
$arrayState = explode('/', $state);
print ('<pre>');
var_dump($arrayState);
print ('<hr>');
*/

$info = 'Porto Velho/RO/Brasil/Terra';
$arrayInfo = explode('/', $info);
print ('<pre>');
var_dump($arrayInfo);
print ('<hr>');

print implode($arrayInfo, ' # ');
print ('<hr>');

$numbers = [1, 2, 3, 4, 5];

print implode($numbers, ' - ');
