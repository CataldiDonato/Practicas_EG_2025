<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombreUsuario"])) {

    // si ya se envio el formulario

    $nombreUsuario = $_POST["nombreUsuario"];
    setcookie("nombreUsuario", $nombreUsuario, time() + 3600 * 24 * 30); 
    $ultimoNom = $nombreUsuario; 
} elseif (isset($_COOKIE["nombreUsuario"])) {

    // Si ya hubo una cookie con el nombre del ususario
    $ultimoNom = $_COOKIE["nombreUsuario"];
    
} else {
    $ultimoNom = ""; // Si no hay cookie ni formulario enviado, establece el valor predeterminado
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Nombre de Usuario</title>
</head>
<body>
    <h1>Formulario de Nombre de Usuario</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombreUsuario">Nombre de Usuario:</label>
        <input type="text" name="nombreUsuario" id="nombreUsuario" value="<?php echo $ultimoNom; ?>">
        <input type="submit" value="Guardar Nombre de Usuario">
    </form>

    
    <?php
    if (!empty($ultimoNom)) {
        echo "<h2>Último Nombre de Usuario Ingresado</h2>"   ;
        echo "<p>El último nombre de usuario ingresado es: $ultimoNom</p>";
    } else {
        echo "<p>No se ha ingresado un nombre de usuario todavía.</p>";
    }
    ?>
</body>
</html>