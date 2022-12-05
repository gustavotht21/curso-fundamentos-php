<?php

date_default_timezone_set('America/Porto_Velho');

// Ano completo
print 'O ano atual é: ' . date('Y') . '<br>';
// Ano abreviado
print 'O ano atual abreviado é: ' . date('y') . '<br>';

print ('<hr>');

// Mês e dia
print 'O mês atual é: ' . date('m') . '<br>';
print 'O dia atual é: ' . date('d') . '<br>';

print ('<hr>');

// Data completa
print 'A data atual é: ' . date('d/m/Y') . '<br>';

print ('<hr>');

// Formato 24h
print 'A hora atual é: ' . date('H') . '<br>';

// Formato 12h
print 'A hora atual é: ' . date('h') . '<br>';

print ('<hr>');

// Minutos e segundos
print 'O minuto atual é: ' . date('i') . '<br>';
print 'O segundo atual é: ' . date('s') . '<br>';

print ('<hr>');

// Horário completo
print 'Horário atual: ' . date('H:m:s') . '<br>';
print 'Timezone: ' . date_default_timezone_get() . '<br>';



