<?php
$colorFondo = "white"; // Establece un color de fondo predeterminado

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["colorFondo"])) {
   
    $colorFondo = $_POST["colorFondo"];
    setcookie("colorFondo", $colorFondo, time() + 3600 * 24 * 30); // La cookie expirará en 30 días
} elseif (isset($_COOKIE["colorFondo"])) {

    // Si la cookie de color de fondo ya existe, obtén el color de fondo almacenado
    
    $colorFondo = $_COOKIE["colorFondo"];
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Página con Color de Fondo</title>
    <style>
        body {
            background-color: <?php echo $colorFondo; ?>;
        }
    </style>
</head>
<body>
    <h1>Página con Color de Fondo</h1>
    <p>Seleccione un color de fondo para la página:</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <select name="colorFondo">
            <option value="white" <?php if ($colorFondo === 'white') echo 'selected'; ?>>Blanco</option>
            <option value="lightblue" <?php if ($colorFondo === 'lightblue') echo 'selected'; ?>>Azul Claro</option>
            <option value="lightgreen" <?php if ($colorFondo === 'lightgreen') echo 'selected'; ?>>Verde Claro</option>
            <option value="lightpink" <?php if ($colorFondo === 'lightpink') echo 'selected'; ?>>Rosa Claro</option>
        </select>
        <input type="submit" value="Guardar Color de Fondo">
    </form>
</body>
</html>