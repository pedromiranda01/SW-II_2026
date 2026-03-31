<?php
function somaLista($valores){
    $soma = 0;

    for($i = 0; $i < count($valores); $i++){
        $soma += $valores[$i];
    }

    return $soma;
}

$array = array(5, 5, 5);
echo somaLista($array);
?>