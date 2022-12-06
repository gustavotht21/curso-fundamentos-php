<?php

function generateLogin ($content)
{
    $file = fopen('login.txt', 'a+');
    fwrite($file, $content);
    fclose($file);
}

$body = "Algo bananinha dia lindo\r\n";
generateLogin($body);