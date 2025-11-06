<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03-Constructor y Namespace</title>
</head>
<body>
    <?php
        use EJEMPLOS\PHP_POO\Cabecera2 as Cabecera;
        require_once __DIR__.'/Cabecera.php';

        /*$cabecera = new Cabecera('El rincón del Programador', 'center');
        $cabecera->graficar();*/
        $cabecera2 = new Cabecera('El rincón del Programador', 'center', 'https://cs.buap.mx');
        $cabecera2->graficar();

    ?>
</body>
</html>