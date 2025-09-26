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

function validarSexoyEdad($sexo, $edad){
    if ($sexo === "femenino" && $edad >= 18 && $edad <= 35) {
      echo "<p><strong>Bienvenida</strong>, usted está en el rango de edad permitido.</p>";
  } else {
      echo "<p><strong>Acceso denegado</strong>, no cumple con los requisitos.</p>";
  }
}

function obtenerVehiculos(): array {
    return [
        'ABC1234' => [
            'Auto' => ['marca' => 'HONDA', 'modelo' => 2020, 'tipo' => 'camioneta'],
            'Propietario' => ['nombre' => 'Alfonzo Esparza', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'C.U., Jardines de San Manuel']
        ],
        'DEF5678' => [
            'Auto' => ['marca' => 'MAZDA', 'modelo' => 2019, 'tipo' => 'sedan'],
            'Propietario' => ['nombre' => 'Ma. del Consuelo Molina', 'ciudad' => 'Puebla, Pue.', 'direccion' => '97 oriente']
        ],
        'GHI9012' => [
            'Auto' => ['marca' => 'NISSAN', 'modelo' => 2022, 'tipo' => 'hachback'],
            'Propietario' => ['nombre' => 'Ricardo Pérez', 'ciudad' => 'Atlixco, Pue.', 'direccion' => 'Av. Hidalgo #10']
        ],
        'JKL3456' => [
            'Auto' => ['marca' => 'FORD', 'modelo' => 2015, 'tipo' => 'sedan'],
            'Propietario' => ['nombre' => 'Laura Vázquez', 'ciudad' => 'Cholula, Pue.', 'direccion' => 'Calle 14 Nte #300']
        ],
        'MNO7890' => [
            'Auto' => ['marca' => 'CHEVROLET', 'modelo' => 2023, 'tipo' => 'camioneta'],
            'Propietario' => ['nombre' => 'Héctor Jiménez', 'ciudad' => 'Ciudad de México', 'direccion' => 'Insurgentes Sur #4000']
        ],
        'PQR1122' => [
            'Auto' => ['marca' => 'VOLKSWAGEN', 'modelo' => 2018, 'tipo' => 'hachback'],
            'Propietario' => ['nombre' => 'Gabriela Soto', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Fracc. Los Héroes']
        ], 
        'STU3344' => [
            'Auto' => ['marca' => 'TOYOTA', 'modelo' => 2021, 'tipo' => 'sedan'],
            'Propietario' => ['nombre' => 'José Luis Montes', 'ciudad' => 'Veracruz, Ver.', 'direccion' => 'Blvd. Adolfo Ruíz Cortines']
        ],
        'VWX5566' => [
            'Auto' => ['marca' => 'BMW', 'modelo' => 2024, 'tipo' => 'sedan'],
            'Propietario' => ['nombre' => 'Elena Ríos', 'ciudad' => 'Guadalajara, Jal.', 'direccion' => 'Av. Patria #100']
        ],
        'YZA7788' => [
            'Auto' => ['marca' => 'KIA', 'modelo' => 2017, 'tipo' => 'hachback'],
            'Propietario' => ['nombre' => 'Daniel Gómez', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Zacatlán de las Manzanas']
        ],
        'BCD9900' => [
            'Auto' => ['marca' => 'MERCEDES', 'modelo' => 2023, 'tipo' => 'camioneta'],
            'Propietario' => ['nombre' => 'Sofia Hernández', 'ciudad' => 'Monterrey, NL', 'direccion' => 'San Pedro Garza García']
        ],
        'EFG1357' => [
            'Auto' => ['marca' => 'HYUNDAI', 'modelo' => 2016, 'tipo' => 'sedan'],
            'Propietario' => ['nombre' => 'Pablo Ramos', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Col. El Mirador']
        ],
        'HIJ2468' => [
            'Auto' => ['marca' => 'RENAULT', 'modelo' => 2019, 'tipo' => 'hachback'],
            'Propietario' => ['nombre' => 'Fernanda Luna', 'ciudad' => 'Tijuana, BC', 'direccion' => 'Zona Río']
        ],
        'KLM0852' => [
            'Auto' => ['marca' => 'JEEP', 'modelo' => 2021, 'tipo' => 'camioneta'],
            'Propietario' => ['nombre' => 'Andrés Rocha', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Angelópolis']
        ],
        'NOP9513' => [
            'Auto' => ['marca' => 'PEUGEOT', 'modelo' => 2022, 'tipo' => 'sedan'],
            'Propietario' => ['nombre' => 'Verónica Cruz', 'ciudad' => 'Cancún, QR', 'direccion' => 'Av. Tulum']
        ],
        'QRS7531' => [
            'Auto' => ['marca' => 'SUZUKI', 'modelo' => 2018, 'tipo' => 'hachback'],
            'Propietario' => ['nombre' => 'Carlos Solís', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'C. 16 de Septiembre']
        ]
    ];
}

function validarMatricula(string $matricula): bool {
    // Convertimos a mayúsculas antes de validar para asegurar consistencia
    $matricula = strtoupper($matricula); 
    
    return preg_match('/^[A-Z]{3}[0-9]{4}$/', $matricula);
}

function buscarVehiculoPorMatricula($matricula){
    // Convertimos la matricula a mayúsculas
    $matricula_upper = strtoupper($matricula);
    $obtenerVehiculos = obtenerVehiculos();

    if (isset($obtenerVehiculos[$matricula_upper])) {
        return $obtenerVehiculos[$matricula_upper];
    } else {
        return null;
    }
}

?>