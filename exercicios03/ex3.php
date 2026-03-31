<?php
 


function num($numero = 67){

   

    if ($numero % 2 == 0) {
      echo $numero . " é par";
    } else {
      echo $numero . " é ímpar";
    }
        
        
}

echo num();

?>