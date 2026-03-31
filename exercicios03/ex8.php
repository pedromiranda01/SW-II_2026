<?php
function criarNumeros(){
    $lista = array();

    for($i = 0; $i < 10; $i++){
        array_push($lista, rand(1, 50));
    }

    return $lista;
}

$dados = criarNumeros();

foreach($dados as $num){
    echo $num . "<br>";
}
?>