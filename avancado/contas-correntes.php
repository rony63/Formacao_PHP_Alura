<?php 

   $conta1 = [
      'titular' => 'Rony',
      'saldo' => 1025
   ];

   $conta2 = [
      'titular' => 'Renam',
      'saldo' => 5000
   ];

   $conta3 = [
    'titular' => 'Maria Clara',
    'saldo' => 10000
   ];

   $contasCorrentes = [$conta1, $conta2, $conta3];

   for($i = 0; $i < count($contasCorrentes); $i++){

      echo $contasCorrentes[$i]['titular'] . PHP_EOL;

   }
?>