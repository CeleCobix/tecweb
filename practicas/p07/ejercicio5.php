<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
    <title>Resultado</title>
</head>
<body>
    <?php   
        require_once 'src/funciones.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $edad = $_POST['edad'] ?? null;
            $sexo = $_POST['sexo'] ?? null;

            if ($edad !== null && $sexo !== null) {
                validarSexoyEdad($sexo, $edad);
            } else {
                echo "<p>Por favor, complete todos los campos.</p>";
            }
        }
    ?>
</body>
</html>