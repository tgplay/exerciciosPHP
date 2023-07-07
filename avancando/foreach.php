<?php

//uma lista padrão, array numerico
//arrays associativos é quando definimos valores das chaves
//aqui estamos modificando os indices dessa lista

// $contasCorrentes = [
//     PHP_EOL . PHP_EOL . 12345678910 => [
//         'titular' => 'Vinicius',
//         'saldo' => 1000
//     ],
//     12345678911 => [
//         'titular' => 'Maria',
//         'saldo' => 10000
//     ],
//     12345678912 => [
//         'titular' => 'Alberto',
//         'saldo' => 300
//     ] 
// ];

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
// quando um array não possui nenhum indicie numerico, o próximo seria o zero. E é nesse indice que o php vai adicionar o proximo item do array.

//Então se tiver um array associativo onde as chaves tem algum significado, sempre que for adicionar um novo item, você deve especificar o indice.


//Para cada (foreach) conta corrente, chamando-a de $conta, 
//imprima o titular da conta

//com o foreach, não precisamos saber o indice para iterar por cada uma das contas 

//para a acessar o indice, basta colocar o $indice => $conta


//adicionando um novo item no array associativo
// echo $contasCorrentes[12347775911] = [
//     'titular' => 'Claudia',
//     'saldo' => 2000
// ];

// echo $contasCorrentes[] = [
//     'titular' => 'Claudia',
//     'saldo' => 2000
// ];

echo $contasCorrentes['338.291.548-01'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach($contasCorrentes as $cpf => $conta) {
    // echo $conta['titular'] . PHP_EOL;
    // echo '' . $conta['titular'] . PHP_EOL;
    echo $cpf . ' ' . $conta['titular'] . PHP_EOL . PHP_EOL;

}
