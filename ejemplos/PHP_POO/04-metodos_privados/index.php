<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once __DIR__.'/Tabla.php';

        $tabla = new Tabla(3, 3, 'border: 1px solid black; border-collapse: collapse; text-align: center;');
        $tabla->cargar(0,0, 'A');
        $tabla->cargar(0,1, 'B');
        $tabla->cargar(0,2, 'C');
        $tabla->cargar(1,0, 'D');
        $tabla->cargar(1,1, 'E');
        $tabla->cargar(1,2, 'F');
        $tabla->graficar();
    ?>
</body>
</html>