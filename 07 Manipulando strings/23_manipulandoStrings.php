<?php

$domain = 'https://www.gwplanner.com.br';

//print str_replace('www.', 'https://www.', $domain);
//print substr($domain, 0, 4);
//print substr($domain, -7);
/*
$protocol = substr($domain, 0, 8);
if ($protocol == 'https://')
    print ('É seguro!');
else
    print ('Não é seguro!');
*/

//var_dump(substr($domain, 12, -7));

print (strlen($domain));
