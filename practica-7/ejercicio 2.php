<?php
$contador = 1; // Establece un color de fondo predeterminado

if ( isset($_COOKIE["contador"])) {
   
    $contador = $_COOKIE["contador"] + 1;
    setcookie("contador", $contador, time() + 3600 * 24 * 30); // La cookie expirará en 30 días
} else {

    setcookie("contador", $contador, time() + 3600 * 24 * 30);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Página</title>
    <style>
       
    </style>
</head>
<body>
    <h1>Bienvenidos</h1>
    <?php
    if ($contador > 1) {
        // Si el contador es mayor que 1, es decir, no es la primera visita, muestra el contador
        echo "<h1>Esta es la visita número: $contador</h1>";
    }
    ?>
</body>
</html>