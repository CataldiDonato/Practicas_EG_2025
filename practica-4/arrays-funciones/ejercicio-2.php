<!-- A -->
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12]; // cuando echo es true se imprime 1
// aca nos devuelve bar1
?>

<!-- B -->
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];
// aca nos devuelve 5942
?>

<!-- C -->
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56; // lo que se hace aca seria 13 => 56
$matriz["x"] = 42;
unset($matriz[5]);
unset($matriz); //elimina toda la matriz 
// al eliminar toda la matriz no tendremos salida
?>