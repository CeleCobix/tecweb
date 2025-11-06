<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once __DIR__.'/Pagina.php';

        $pagina = new Pagina("El ático del Programador", "El sótano del Programador");
        $pagina->agregar_parrafo("Este es el primer párrafo.");
        $pagina->agregar_parrafo("Este es el segundo párrafo.");
        $pagina->graficar();
    ?>
</body>
</html>