<?php

$contasCorrentes = [
    PHP_EOL . PHP_EOL . '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ] 
];

foreach($contasCorrentes as $cpf => $conta) {
    // echo $conta['titular'] . PHP_EOL;
    // echo '' . $conta['titular'] . PHP_EOL;
    echo $cpf . ' ' . $conta['titular'] . PHP_EOL . PHP_EOL;

}
