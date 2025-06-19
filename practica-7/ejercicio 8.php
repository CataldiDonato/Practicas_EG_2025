<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";

$conexion = new mysqli($servername, $username);
mysqli_select_db($conexion, "spotify");

if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Inicializar la variable de búsqueda
$busqueda = "";

// Verificar si se ha enviado el formulario de búsqueda
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["buscar"])) {
    $busqueda = $_POST["busqueda"];
    $consulta = "SELECT * FROM buscador WHERE cancione LIKE '%$busqueda%'";
    $resultado = $conexion->query($consulta);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Buscador de Canciones</title>
</head>
<body>
    <h1>Buscador de Canciones</h1>
    <form method="post">
        <input type="text" name="busqueda" placeholder="Buscar canciones" value="<?php echo $busqueda; ?>">
        <input type="submit" name="buscar" value="Buscar">
    </form>

    <?php
    if (isset($resultado) && $resultado->num_rows > 0) {
        echo "<h2>Resultados de la búsqueda:</h2>";
        echo "<ul>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<li>" . $fila['cancione'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No se encontraron canciones que coincidan con la búsqueda.";
    }
    ?>

</body>
</html>