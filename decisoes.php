<?php

$idade = 15;
$numeroDePessoas = 1;

echo PHP_EOL;
echo "Você só pode entrar se for maior de 18 anos, ou ";
echo "a partir de 16 anos acompanhado.";
echo PHP_EOL;

if($idade >= 18){
    echo "Como você tem $idade anos." . PHP_EOL;
    echo "Pode entrar!";
    echo PHP_EOL.PHP_EOL;
} else if($idade >=16 && $numeroDePessoas >= 2){
    echo "Como você tem $idade anos e está acompanhado(a) ";
    echo "Pode entrar!";
    echo PHP_EOL.PHP_EOL;
    
} else if($idade >=16 && $numeroDePessoas < 2){
    echo "Você tem $idade anos mas não está acompanhado(a). Não pode entrar!";
    
} else if($idade < 16){
    echo PHP_EOL;
    echo "Como você só tem $idade anos. Não pode entrar nem mesmo acompanhado!";
    echo PHP_EOL;
}

echo PHP_EOL;
echo "Bye bye!" . PHP_EOL . PHP_EOL;
