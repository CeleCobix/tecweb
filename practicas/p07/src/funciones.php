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

    $resultado = [
        'matriz' => $matriz,
        'iteraciones' => $iteraciones,
        'numeros' => $iteraciones * 3
    ];

    echo '<h3>Resultados de la secuencia:</h3>';
    echo '<pre>';
    print_r($resultado);
    echo '</pre>';

    return $resultado;
}

function encontrarMultiploWhile($num) {
    $numero_encontrado = 0;
    $intentos = 0;

    while ($numero_encontrado % $num !== 0 || $numero_encontrado === 0) {
        $numero_encontrado = mt_rand(1, 100000); 
        $intentos++;
    }

    echo "<p>Buscando el primer múltiplo de <b>{$num}</b>.</p>";
    echo "<p>El número encontrado es: <b>{$numero_encontrado}</b></p>";
    echo "<p>Se necesitaron: <b>{$intentos}</b> intentos.</p>";
}

function indicesASCII(){
    $array = [];
    for ($i = 97; $i <= 122; $i++) {
        $array[$i] = chr($i);
    }

    return $array;
}

?>