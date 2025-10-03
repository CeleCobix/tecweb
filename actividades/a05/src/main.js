function getDatos()
{
    var nombre = prompt("Nombre: ", "");

    var edad = prompt("Edad: ", 0);

    var div1 = document.getElementById('nombre');
    div1.innerHTML = '<h3> Nombre: '+nombre+'</h3>';

    var div2 = document.getElementById('edad');
    div2.innerHTML = '<h3> Edad: '+edad+'</h3>';
}

function holaMundo(){
    var div = document.getElementById('holaMundo');
    div.innerHTML = '<h3> Hola Mundo </h3>';
}

function variables(){
    var nombre = prompt("Nombre: ", "");
    var edad = prompt("Edad: ", 0);
    var altura = prompt("Altura (en metros): ", 0.0);
    var casado = confirm("¿Está casado?");

    var div1 = document.getElementById('nombre2');
    var div2 = document.getElementById('edad2');
    var div3 = document.getElementById('altura');
    var div4 = document.getElementById('casado');

    div1.innerHTML = '<h3> Nombre: '+nombre+'</h3>';
    div2.innerHTML = '<h3> Edad: '+edad+'</h3>';
    div3.innerHTML = '<h3> Altura: '+altura+'</h3>';
    if (casado){
        div4.innerHTML = '<h3> Casado: Sí</h3>';
    } else {
        div4.innerHTML = '<h3> Casado: No</h3>';
    }

}

function Ejercicio3(){
    var nombre = prompt("Ingresa tu nombre: ", "");
    var edad = prompt("Ingresa tu edad: ", 0);

    var div = document.getElementById('ejer3');
    div.innerHTML = '<h3> Hola '+nombre+', así que tienes '+edad+' años </h3>';
}

function operaciones(){
    var num1 = parseFloat(prompt("Número 1: ", 0.0));
    var num2 = parseFloat(prompt("Número 2: ", 0.0));

    var suma = num1 + num2;
    var producto = num1 * num2;

    var divSuma = document.getElementById('ejer4suma');
    var divProducto = document.getElementById('ejer4producto');

    divSuma.innerHTML = '<h3> La suma entre '+num1+' y '+num2+' es: '+suma+'</h3>';
    divProducto.innerHTML = '<h3> El producto entre '+num1+' y '+num2+' es: '+producto+'</h3>';
}

function condicionales(){
    var nombre = prompt("Nombre: ", "");
    var nota = parseFloat(prompt("Nota: ", 0.0));
    if (nota >= 4.0){
        var div = document.getElementById('ejer5');
        div.innerHTML = '<h3> '+nombre+', esta  aprobado con un '+nota+'</h3>';
    }else{
        var div = document.getElementById('ejer5');
        div.innerHTML = '<h3> '+nombre+', esta  suspendido con un '+nota+'</h3>';
    }
}

function ejercicio6(){
    var num1 = parseInt(prompt("Número 1: ", 0));
    var num2 = parseInt(prompt("Número 2: ", 0));

    if (num1 > num2){
        var div = document.getElementById('ejer6');
        div.innerHTML = '<h3> Entre '+num1+' y '+num2+', el mayor es: '+num1+'</h3>';
    }else{
        var div = document.getElementById('ejer6');
        div.innerHTML = '<h3> Entre '+num1+' y '+num2+', el mayor es: '+num2+'</h3>';
    }
}