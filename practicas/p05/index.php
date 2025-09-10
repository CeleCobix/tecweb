<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida
        
        echo '<h4>Respuesta:</h4>';   
    
        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
        echo '</ul>';
    ?>

        <!-- EJERCICIO 2 -->
    <h2>Ejercicio 2</h2>
    <p>Proporcionar y mostrar valores de $a, $b, $c; luego reasignar y volver a mostrar.</p>
    <?php
    
    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a; // $c referencia a $a

    echo '<h4>Antes del segundo bloque:</h4>';
    echo "Variable a: " . $a;  echo " Variable b: " . $b; echo " Variable c: " . $c;
   
    $a = "PHP server";
    $b = &$a; // ahora $b referencia a $a

    echo '<h4>Después del segundo bloque:</h4>';
    echo "Variable a: " . $a;  echo " Variable b: " . $b; echo " Variable c: " . $c;

    echo '<p><strong>Descripción:</strong> Inicialmente $c era referencia a $a (ambos valían "ManejadorSQL"). ' .
         'Al asignar $a = "PHP server"; el valor referenciado cambia y tanto $a como $c muestran "PHP server". ' .
         'Al hacer <code>$b = & $a</code>, $b pasa a ser otra referencia a la misma zval; al final $a, $b y $c apuntan al mismo valor "PHP server".</p>';
    
    unset($a, $b, $c);
    ?>

     <!-- EJERCICIO 3 -->
    <h2>Ejercicio 3</h2>
    <p>Muestra el contenido inmediatamente después de cada asignación y verifica el tipo / evolución.</p>
    <?php
    $a = "PHP5";
    echo '<h4>$a = "PHP5";</h4>';
    echo "Variable a: "; var_dump($a);

    $z = array();
    $z[] = &$a; // $z[0] es referencia a $a
    echo '<h4>$z[] = & $a; (ahora $z[0] referencia a $a)</h4>';
    echo "Variable z: "; var_dump($z);

    $b = "5a version de PHP";
    echo '<h4>$b = "5a version de PHP";</h4>';
    echo "Variable b: "; var_dump($b);

    $c = $b * 10; // $b se convierte numéricamente (toma el prefijo numérico: 5)
    echo '<h4>$c = $b * 10;</h4>';
    echo "Variable c: "; var_dump($c);

    $a .= $b; // concatenación, cambia $a (y entonces también cambia $z[0] porque es referencia)
    echo '<h4>$a .= $b; (concatenación)</h4>';
    echo "Variable a: "; var_dump($a);
    echo '<p>Nota: como $z[0] referencia a $a, su valor también refleja el nuevo valor de $a.</p>';
    echo "Variable z: "; var_dump($z);

    $b *= $c; // $b (cadena) convertida a número (5) y multiplicada por $c
    echo '<h4>$b *= $c;</h4>';
    echo "Variable b: "; var_dump($b);

    $z[0] = "MySQL"; // asignación sobre el elemento referenciado — modifica también $a
    echo '<h4>$z[0] = "MySQL";</h4>';
    echo "Variable z: "; var_dump($z);
    echo '<p>Comprobación: $a también cambia porque $z[0] era referencia a $a:</p>';
    echo "Variable a: "; var_dump($a);

    ?>

    <!-- EJERCICIO 4 -->
    <h2>Ejercicio 4</h2>
    <p>Mostrar los valores del ejercicio anterior usando <code>$GLOBALS</code> o <code>global</code>.</p>
    <?php
    echo '<h4>Acceso con $GLOBALS:</h4>';
    // $a,$b,$c,$z siguen definidos
    echo '<pre>';
    echo 'GLOBALS["a"]: '; var_dump($GLOBALS['a']);
    echo 'GLOBALS["b"]: '; var_dump($GLOBALS['b']);
    echo 'GLOBALS["c"]: '; var_dump($GLOBALS['c']);
    echo 'GLOBALS["z"]: '; print_r($GLOBALS['z']);
    echo '</pre>';

    unset($a, $b, $c, $z);
    ?>

    
</body>
</html>