<?php
   $peso = 66.5;
   $altura = 1.83;
   $imc = round($peso / $altura ** 2, 2);

   echo "-----------------------------\n";
   echo "Bem vindo a calculadora de IMC \n";
   echo "-----------------------------\n";
   
   echo "Seu IMC: $imc \n";
   
   if ($imc >= 25 and $imc <= 29.9){
      echo "Sobrepeso! \n";
   }else if ($imc >= 30 and $imc <= 34.9){
      echo "Obesidade Grau I \n"; 
   }else if ($imc >= 35 and $imc <= 39.9){
      echo "Obesidade Grau II \n"; 
   }else if ($imc > 40){
      echo "Obesidade Grau III \n"; 
   }else{
      echo "Você está no peso ideal! \n";
   }
   
   echo "-----------------------------\n";
?>