<?php

   for($i = 0; $i <= 15; $i++){
       if($i == 15){
          continue;
       }
       echo "#$i" . PHP_EOL;
   }

   for($c = 0; $c <= 15; $c++){
    if($c == 15){
       break;
    }
    echo "#$c" . PHP_EOL;
}

?>