<?php

session_start();

// Exemplo de possível utilização em um sistema de login

// Verifica se existe a sessão
if (! isset($_SESSION['auth'])) {
    // Redireciona para o arquivo de setSessoes para criar a sessão de login
    header('Location:32_setSessoes.php');
} else {
    print ('Painel de admin');
}

/*
print $_SESSION['name'];
print ('<hr>');
//print ('<pre>');
var_dump($_SESSION['name']['lastName']);
*/
