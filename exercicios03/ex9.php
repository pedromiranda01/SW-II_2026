<?php
function calcularFatorial($n){
    $fat = 1;

    for($i = $n; $i >= 1; $i--){
        $fat = $fat * $i;
    }

    return $fat;
}

echo calcularFatorial(4);
?>