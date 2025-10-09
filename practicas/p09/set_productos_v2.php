<?php
$host = 'localhost';
$user = 'root';
$password = 'yisshanli'; 
$database = 'marketzone';

$nombre   = $_POST['nombre'] ?? '';
$marca    = $_POST['marca'] ?? '';
$modelo   = $_POST['modelo'] ?? '';
$precio   = (float)($_POST['precio'] ?? 0.0); 
$detalles = $_POST['detalles'] ?? '';
$unidades = (int)($_POST['unidades'] ?? 1); 
$imagen   = $_POST['imagen'] ?? 'img/default.png';

@$link = new mysqli($host, $user, $password, $database);	

if ($link->connect_errno) 
{
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
}

$sql_check = "SELECT id FROM productos WHERE nombre = '{$nombre}' AND marca = '{$marca}' AND modelo = '{$modelo}' LIMIT 1";
$result = $link->query($sql_check);

if ($result && $result->num_rows > 0) 
{
    echo 'El Producto no pudo ser insertado :(';
    echo '<h2>Error de Inserción</h2>';
    echo '<p>Ya existe un producto registrado con el Nombre, Marca y Modelo proporcionados.</p>';
}
else
{
    $sql_insert = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen) 
                   VALUES ('{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}')";
    
    if ( $link->query($sql_insert) ) 
    {
        $id_insertado = $link->insert_id;
        echo 'Producto insertado con ID: ' . $id_insertado;

        echo '<h2>Resumen del Producto Insertado:</h2>';
        echo '<ul>';
        echo '<li><strong>ID:</strong> ' . $id_insertado . '</li>';
        echo '<li><strong>Nombre:</strong> ' . $nombre . '</li>';
        echo '<li><strong>Marca:</strong> ' . $marca . '</li>';
        echo '<li><strong>Modelo:</strong> ' . $modelo . '</li>';
        echo '<li><strong>Precio:</strong> ' . number_format($precio, 2) . '</li>';
        echo '<li><strong>Unidades:</strong> ' . $unidades . '</li>';
        echo '<li><strong>Detalles:</strong> ' . $detalles . '</li>';
        echo '<li><strong>Imagen:</strong> ' . $imagen . '</li>';
        echo '</ul>';
    }
    else
    {
        echo 'El Producto no pudo ser insertado :(';
        echo '<h2>Error de SQL</h2>';
        echo '<p>Ocurrió un error al intentar insertar el registro: ' . $link->error . '</p>';
    }
}

$link->close();
?>