<?php
$color = 'blanco';
$flor = 'clavel';
?>
<!-- dara error ya que las varibles $flor y $color no estan definidas -->
<?php
echo "El $flor $color \n";
include 'datos.php'; // si aca ponemos include 'ejercicio-4.php' entrariamos en bucle
echo " El $flor $color";
?> 
<!-- pero al incluir el include lo que hacemos es incluir y evalura el archivo especifico y nos imprime el clavel es blanco -->
