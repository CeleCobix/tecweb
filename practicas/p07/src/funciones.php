<?php

function multiplode5y7($num) {
    if(isset($num)) {
        if ($num % 5 == 0 && $num % 7 == 0) {
            echo '<h3>R= El número ' . $num . ' SÍ es múltiplo de 5 y 7.</h3>';
        } else {
            echo '<h3>R= El número ' . $num . ' NO es múltiplo de 5 y 7.</h3>';
        }
    } else {
        return null;

    }
}

function generarSecuenciaImparParImpar($maxRandom = 999) {
    $matriz = [];
    $iteraciones = 0;
    while (true) {
        $a = mt_rand(0, $maxRandom);
        $b = mt_rand(0, $maxRandom);
        $c = mt_rand(0, $maxRandom);
        $matriz[] = [$a, $b, $c];
        $iteraciones++;
        if (($a % 2 !== 0) && ($b % 2 === 0) && ($c % 2 !== 0)) break;
    }
    return [
        'matriz' => $matriz,
        'iteraciones' => $iteraciones,
        'numeros' => $iteraciones * 3
    ];
}



?>