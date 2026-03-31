<?php
function tabuadaSimples($n){
    $i = 1;

    while($i <= 10){
        echo $n . " x " . $i . " = " . ($n * $i) . "<br>";
        $i++;
    }
}

tabuadaSimples(2);
?>
