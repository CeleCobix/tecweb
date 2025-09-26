<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        require_once 'src/funciones.php';
        if(isset($_GET['num']))
        {
            $num = $_GET['num'];
            multiplode5y7($num);
        }
    ?>

    <h2>Ejercicio 2</h2>
    <p>Generar una secuencia de números aleatorios con la siguiente estructura: impar, par, impar.</p>
    <?php
        generarSecuenciaImparParImpar();
    ?>

    <h2>Ejercicio 3</h2>
    <p>Generar números aleatorios hasta encontrar un múltiplo de un número dado.</p>
    <?php
        require_once 'src/funciones.php';
        if(isset($_GET['num']))
        {
            $num = $_GET['num'];
            encontrarMultiploWhile($num);
        }
    ?>

    <h2>Ejercicio 4</h2>
    <p>Generar un arreglo asociativo con los índices ASCII de las letras minúsculas.</p>
    <?php
        require_once 'src/funciones.php';
        $asciiArray = indicesASCII();
        echo "<table>";
        echo "<tr><th>Indice (ASCII)</th><th>Letra</th></tr>";
        
        foreach ($asciiArray as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        
        echo "</table>";
    ?>

    <h2>Ejercicio 5</h2>
    <p>Validar el sexo y la edad de una persona.</p>
    <form action="http://localhost/tecweb/practicas/p07/ejercicio5.php" method="post">       
        Edad: <input type="text" name="edad"><br>
        Sexo: 
        <select name="sexo">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
        <br>
        <input type="submit">
    </form>

    <h2>Ejercicio 6</h2>
    <p>Buscar matrícula en un arreglo.</p>
    <form action="http://localhost/tecweb/practicas/p07/ejercicio6.php" method="post">
        <label for="matricula">Ingrese matrícula:</label>
        <input type="text" id="matricula" name="matricula" />
        <input type="submit" name="accion" value="Buscar Matrícula" />
        <br><br>
        <input type="submit" name="accion" value="Mostrar Listado" />
    </form>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p07/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>
</body>
</html>