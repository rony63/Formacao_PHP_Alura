<?php

include 'funcoes.php'; // ou require ou require_once

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];



$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf  $conta[titular] $conta[saldo]");
}

?>
