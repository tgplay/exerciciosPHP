<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
// $idade = $idadeList[0];

// echo $idade;

// $idadeList[7] = 20; funciona, mas não é a melhor prática

//$idadeList[count($idadeList)] = 20; funciona, mas não é a melhor prática

$idadeList[] = 20; //melhor prática para adicionar um item no array quando não sabemos o tamanho dele e queremos adicionar um item no final.

foreach($idadeList as $idade){
    echo $idade . PHP_EOL;

}
