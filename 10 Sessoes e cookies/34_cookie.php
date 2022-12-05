<?php

setcookie('applicationCookie', 'cookie Application');
setcookie('auth', 'OK auth', (time() + (7 * 24 * 60 * 60)));

//print $_COOKIE['applicationCookie'];
