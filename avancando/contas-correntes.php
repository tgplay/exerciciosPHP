<?php

//arrays associativos
$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo PHP_EOL . 'Titular: '.$contasCorrentes[$i]['titular']; 
    echo PHP_EOL . 'Saldo: '.$contasCorrentes[$i]['saldo'] . PHP_EOL;
}
