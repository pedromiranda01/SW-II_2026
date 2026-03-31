<?php
function mostrarTabuada($num){
    for($i = 1; $i <= 10; $i++){
        $resultado = $num * $i;
        echo $num . " x " . $i . " = " . $resultado . "<br>";
    }
}

mostrarTabuada(4);
?>