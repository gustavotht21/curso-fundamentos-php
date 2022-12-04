<?php

$infoCompanyOne = [
    'name' => 'Gw Planner',
    'founder_One' => 'Gustavo Borges',
    'founder_Two' => 'Wata Negreiros',
    'year_current' => 2022,
];

$infoCompanyTwo = [
    'resources' => ['login', 'cadastro', 'redefir_senha', 'adicionar_eventos'],
    'total_resources' => 8,
];

//var_dump(array_keys($infoCompany));

//var_dump(array_values($infoCompany));

//var_dump(count($infoCompany));

$infoCompany = array_merge($infoCompanyOne, $infoCompanyTwo);

print("<pre>");
var_dump($infoCompany);