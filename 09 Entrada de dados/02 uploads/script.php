<?php

$image = $_FILES['image'];
$path = '02 uploads/images/';

if (move_uploaded_file($image['tmp_name'], $path . $image['name'])) {
    print ('Updload feito com sucesso!');
} else {
    print ('Algo deu errado');
}
