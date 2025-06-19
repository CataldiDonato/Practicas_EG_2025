<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["usuario"]) && isset($_POST["clave"])) {
    // Se reciben los valores del formulario
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    // Iniciar la sesión
    session_start();

    // Almacenar los valores en variables de sesión
    $_SESSION["usuario"] = $usuario;
    $_SESSION["clave"] = $clave;

    // Redirigir a la página para mostrar las sesiones
    header("Location: mostrar_sesiones.php");
} else {
    // Redirigir de nuevo al formulario si no se enviaron los datos
    header("Location: formulario.php");
}
?>