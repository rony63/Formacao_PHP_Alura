<?php 
   $contasCorrentes = [

        '123.456.789-10' => [
            'titular' => 'Vinicius',
            'saldo' => 1000
        ],

        '123.456.789-12' => [
            'titular' => 'Maria',
            'saldo' => 10000
        ],

        '123.456.789-13' => [
            'titular' => 'Alberto',
            'saldo' => 300
        ]
   ];
   
   $contasCorrentes['123.456.789-15'] = [
        'titular' => 'Claudia',
        'saldo' => 30000
   ];


   foreach($contasCorrentes as $cpf => $conta){
        echo $cpf . " = " . $conta['titular'] . PHP_EOL;
   }
?>