<?php
function somar($lista){
    $total = 0;

    foreach($lista as $valor){
        $total = $total + $valor;
    }

    return $total;
}

$nums = array(2, 4, 6, 8);
echo somar($nums);
?>