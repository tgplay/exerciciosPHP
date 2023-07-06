<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

// echo count($idadeList);
//O count é uma função do PHP que recebe um lista e conta quantos itens tem nela e o numero que ele encontrar é o que será exibido.

// print_r($idadeList);
// exit;

for($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}


