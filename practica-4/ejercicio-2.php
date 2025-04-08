<!-- Ejercicio 2:
Indicar si los siguientes códigos son equivalentes.

A)
<?php
$i = 1;
while ($i <= 10) {
    print $i++;
}
// declararamos $i = 1, luego vemos si se cumple la condicion mientras $i <= 10
//  que en este caso es verdadero, aumenteramos el valor de $i la salida que tendremos seria esta
// 12345678910
?>

<?php
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
// tiene la misma salida que el anterior lo unico que cambia es que se usa la
// alternativa de PHP para estructuras de control, con : y endwhile, pero no cambia
//  su funcionalidad 
?>

<?php
$i = 0;
do {
    print ++$i;
} while ($i<10);
// tiene la misma salida que los ejemplo anteriores lo que cambia es la estructura
// en este codigo utilizamos el do-while, se utiliza ya que en el nos garantiza 
// que se haga el bucle al menos una vez
?>

Los codigos son equivalnetes, llegan al mismo resultado utilizando distintas funciones

B)
<?php
for ($i = 1; $i <= 10; $i++) {
    print $i;
}
?>

<?php
    for ($i = 1; $i <= 10; print $i, $i++) ;
?>
<?php

for ($i = 1; ;$i++) {
    if ($i > 10) {
    break;
    }
    print $i;
}
?>

<?php
$i = 1;
for (;;) {
    if ($i > 10) {
    break;
    }
    print $i;
    $i++;
}
?>

Los cuatros codigos son equivalentes en el funcionamiento, pero en los dos ultimos
se utilizan formas infinitas y entrarias en un bucle porque se usa for(;;) pero al 
usar el BREAK se hace una ruptura de ese for.
en todos los casos el resultado es del 1 al 10

C)
<?php
if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}
?>
<?php
switch ($i) {
    case 0:
    print "i equals 0";
    break;
    case 1:
    print "i equals 1";
    break;
    case 2:
    print "i equals 2";
    break;
}
?>

ambos codigos muestran la misma salida y tiene la misma entrada $i = 0
$i=1, $i=2.
esta estructura seria similar a usar un if con varial else o if-elseif, dependiendo del
valor tendran una salida diferente
-->