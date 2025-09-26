<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
 <meta charset="UTF-8" />
 <title>Resultado Ejercicio 6</title>
</head>
<body>
<h2>Resultados de los Vehiculos</h2>
<?php
    require_once 'src/funciones.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['accion'])) {
        
        $accion = $_POST['accion']; 

        if ($accion === "Buscar Matrícula" && !empty($_POST['matricula'])) { 
            $matricula = strtoupper(trim($_POST['matricula']));
            $auto = buscarVehiculoPorMatricula($matricula);

            if ($auto) {
                echo "<h3>Información del vehículo con matrícula $matricula:</h3>";
                echo "<pre>";
                print_r($auto);
                echo "</pre>";
            } else {
                echo "<p>No se encontró ningún vehículo con la matrícula <strong>$matricula</strong>.</p>";
            }
            
        } elseif ($accion === "Mostrar Todos") {
            $parque = obtenerVehiculos(); 
            echo "<h3>Listado completo del parque vehicular:</h3>";
            echo "<pre>";
            print_r($parque);
            echo "</pre>";
            
        } else {
            echo "<p>Por favor, ingrese una matrícula para buscar o use el botón 'Mostrar Todos'.</p>";
        }
    } else {
        echo "<p>No se recibió una petición válida del formulario.</p>";
    }
?>
</body>
</html>