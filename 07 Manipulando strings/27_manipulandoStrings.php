<?php

$password = '12345678';

// Hash de 32 caracteres usando algoritmo de 128 bits
//print md5($password);

// Hash de 40 caracteres usando algoritmo de 160 bits
//print sha1($password);

// Criptografar usando uma palavra de segurança
//print crypt($password, $salt);

// Criptografia com capacidade de descriptografia
//$passCr = base64_encode($password);
//print $passCr;
//print ('<hr>');
//$passCr = base64_decode($passCr);
//print $passCr;

// Criptografia muito segura
//print hash('sha512', $password);

function cryptC(String $value): String
{
    $hash = hash('sha512', sha1(md5(crypt($value, 'ahGfwrJUJ35#2%g254$$'))));

    return $hash;

}
print cryptC($password);