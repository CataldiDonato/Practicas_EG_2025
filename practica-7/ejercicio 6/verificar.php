<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    // Conectar a la base de datos
    $conexion = new mysqli("localhost", "root");
    mysqli_select_db($conexion, "alumnos");

    if (!$conexion) {
        die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
    }

    
    // Consulta para verificar si el correo electrónico existe en la tabla "alumnos"
    $consulta = "SELECT nombre FROM alumnos WHERE mail = '$email'";
    $resultado = mysqli_query($conexion, $consulta)
    $fila = mysqli_fetch_assoc($resultado)
    if ($fila[$nombre]=$_POST["nombre"]) {
        header("./bienvenida.php");
    }

}
mysqli_close($conexion);

?>