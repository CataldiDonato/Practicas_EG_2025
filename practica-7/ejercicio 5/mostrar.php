<?php
// Iniciar la sesión
session_start();

// Verificar si las variables de sesión existen
if (isset($_SESSION["usuario"]) && isset($_SESSION["clave"])) {
    $usuario = $_SESSION["usuario"];
    $clave = $_SESSION["clave"];

    echo "<h1>Valores almacenados en las sesiones</h1>";
    echo "<p>Nombre de Usuario: $usuario</p>";
    echo "<p>Clave: $clave</p>";
} else {
    echo "<h1>No se encontraron valores en las sesiones.</h1>";
}
?>