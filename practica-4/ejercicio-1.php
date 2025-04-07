<!-- Ejercicio 1:
En el siguiente código identificar:
• las variables y su tipo
• los operadores
• las funciones y sus parámetros
• las estructuras de control
• cuál es la salida por pantalla 
<?php
function doble($i) {
    return $i*2;// en esta funcion que se toma como parametro i va a devolver el doble se su valor original
}


$a = TRUE; // la variable a es del tipo boolean
$b = "xyz"; // la variable b es del tipo string
$c = 'xyz'; // la variable c es del tipo sting
$d = 12; // la varible d es del tipo integer
echo gettype($a) . PHP_EOL;
echo gettype($b) . PHP_EOL;
echo gettype($c) . PHP_EOL;
echo gettype($d) . PHP_EOL;
// en la saliva lo que vamos a ver seria:
// boolean
// string
// string
// integer


if (is_int($d)) { // la funcion is_int es para determinar si la variable es un numero entero
    $d += 4; 
}

if (is_string($a)) { // la funcion is_sting se utiliza para deternimar si la varible es una cadena de caracteres
    echo "Cadena: $a"; 
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
// la salida muestra 1xyzxyz102828
?>
Los operadores son: 
* Multiplicacion
+ Adicion (operador binario)
+= adicion compuesta (tomamos como ejemplo $g = $f += 10 incrementaria 10 en $g)
++ operador unario 
?: operador ternario (condicion ? valor_verdadero : valor_falso)

Estructrura de control:
if (is_int($d))
if (is_string($a))
en estas dos funciones utilizamos la estructura de control if, esta permite la ejecucion condicional