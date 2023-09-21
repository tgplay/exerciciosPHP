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
<?php

function sacar($conta, $valorASacar){
    if($valorASacar > $conta['saldo']){
        exibeMensagem(mensagem: "Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;

}

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 5000);

foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf . " " . $conta['titular'] . ''.$conta['saldo']);
   
}