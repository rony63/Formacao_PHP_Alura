<?php
   echo "======================================================" . PHP_EOL;
   echo "|Olá! Bem vindo ao programa de números pares e ímpares|" . PHP_EOL;
   echo "======================================================" . PHP_EOL;

   // Mostra apenas os números pares
   for($i = 1; $i <= 12; $i++){
       if ($i % 2 == 0){
           echo "#$i" . PHP_EOL;
       }
   }

   // Mostra apenas os números ímpares
   for($i = 1; $i <= 12; $i++){
    if ($i % 2 == 1){
        echo "#$i" . PHP_EOL;
    }
   }

?>