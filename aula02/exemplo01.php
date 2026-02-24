<?php
    $a = 10;
    $b = 5;

    $soma = $a + $b;

    echo "A soma é: " . $soma;
    echo "<br>";
    echo "A variavel 'a' é: ";
    var_dump ($a);
    echo "<br>";
    echo "A variavel 'b' é: ";
    var_dump ($b);

    echo "<br>";
    if ($a == $b){
        echo "A é igual a B";
    }else{
        echo "A é diferente de B";
    }

    echo "<Hr>";

    $n1 = 4;
    $n2 = 5;
    $n3 = 6;

    $media = ($n1 + $n2 + $n3)/3;

    if ($media > 5) {
        echo "APROVADO com media $media";
    }else{
        if($media<4){
            echo "REPROVADO com media $media";
        }else{
            echo "RECUPERAÇÃO com media $media";
        }
    }

    echo "<Hr>";

    $dia = 1;

    switch ($dia) {
        case 1:
            echo "domingo";
            break;

        case 2:
            echo "segunda";
            break;

        case 3:
            echo "terça";
            break;

        case 4:
            echo "quarta";
            break;

        case 5:
            echo "quinta";
            break;

        case 6:
            echo "sexta";
            break;

         case 7:
            echo "sábado";
            break;
        
        default:
            echo "dia inválido";
            break;
    }

    echo "<Hr>";

    for ($i=1; $i <= 10 ; $i++) { 
        echo "$i - ";
    }

    echo "<Hr>";

    $a = 1;

    while ($a <= 10) {
        echo "$a - ";
        $a++;
    }

    echo "<Hr>";

    $b = 1;
    do {
        echo "$b - ";
        $b++;
    } while ($b <= 10);

    echo "<Hr>";

    $nomes = ['Fulano','Ciclano','Beltrano'];
    //echo "$nomes"

    foreach ($nomes as $nome) {
        echo "O nome é: $nome <br>";
    }
?>

