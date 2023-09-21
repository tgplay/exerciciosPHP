<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
];
// O PHP vai converter todos os tipos de chave para inteiro, então o resultado será: 1 => 'd' (o último item do array)
// não é uma boa prática misturar tipos de chaves, pois pode gerar confusão e bugs no código.
// o ideal é usar apenas um tipo de chave, seja string ou inteiro.

foreach ($array as $item) {
    echo $item . PHP_EOL;
}
